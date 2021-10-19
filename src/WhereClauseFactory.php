<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM;

use Biera\Filter\Modifier;
use Biera\Filter\Operator;
use DateTimeInterface;
use Doctrine\ORM\Query\Expr;

class WhereClauseFactory
{
    public static function createFromFilterExpression(Operator $filterExpression, Modifier $modifier = null)
    {
        $DQLExpression = new Expr();

        if ($filterExpression->isNary()) {
            return $DQLExpression->{$filterExpression.'X'}(
                ...array_map(
                    fn (Operator $filterExpression) => self::createFromFilterExpression($filterExpression, $modifier),
                    $filterExpression->operands()
                )
            );
        }

        if (!is_null($modifier)) {
            $filterExpression = $modifier->modify($filterExpression);
        }

        switch ($filterExpression->type())
        {
            case Operator::LT:
            case Operator::LTE:
            case Operator::GT:
            case Operator::GTE:
            case Operator::EQ:
            case Operator::NEQ:
                $literal = $filterExpression->literal();

                $buildExpression = fn() => $DQLExpression->{$filterExpression->type()}(
                    $filterExpression->identifier(),
                    $DQLExpression->literal(
                        $literal instanceof DateTimeInterface
                            ? $literal->format(DateTimeInterface::ISO8601)
                            : $literal
                    )
                );

                break;

            case  Operator::LIKE:
                $buildExpression = fn() => $DQLExpression->like(
                    $filterExpression->identifier(),
                    $DQLExpression->literal(
                        $filterExpression->literal()
                    )
                );

                break;

            case Operator::NULL:
            case Operator::NOT_NULL:
                $buildExpression = function () use ($filterExpression, $DQLExpression) {
                    $operator = ucfirst($filterExpression->type());

                    return $DQLExpression->{"is{$operator}"}($filterExpression->identifier());
                };

                break;

            case Operator::IN:
                $buildExpression = fn() => $DQLExpression->in(
                    $filterExpression->identifier(),
                    $filterExpression->literal()
                );

                break;

            default :
                throw new \LogicException('Not supported expression: ' . $filterExpression);
        }

        return $buildExpression();
    }
}
