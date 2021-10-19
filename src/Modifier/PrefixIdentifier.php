<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Modifier;

use Biera\Filter\Operator;
use Biera\Filter\Modifier;
use InvalidArgumentException;

class PrefixIdentifier implements Modifier
{
    private string $alias;

    public function __construct(string $alias)
    {
        $this->alias = $alias;
    }

    public function modify(Operator $operator): Operator
    {
        if (!$operator->isTerminal()) {
            throw new InvalidArgumentException(
                'Please, provide terminal operator (EQ, NEQ, LIKE, GT, GTE, LT, LTE, NULL, NOT NULL).'
            );
        }

        $identifier = $operator->identifier();

        if (false === strpos($identifier, '.')) {
            $identifier = "{$this->alias}.{$identifier}";
        }

        return $operator->isBinary()
            ? Operator::{$operator->type()}($identifier, $operator->literal())
            : Operator::{$operator->type()}($identifier);
    }
}
