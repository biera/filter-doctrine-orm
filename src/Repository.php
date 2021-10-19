<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Biera\Filter\Binding\Doctrine\ORM\Modifier\PrefixIdentifier;
use Biera\Filter\Operator as FilterExpression;

abstract class Repository extends EntityRepository
{
    public function filter(FilterExpression $expression): QueryBuilder
    {
        $alias = $this->alias();

        return $this->createQueryBuilder($alias)->where(
            WhereClauseFactory::createFromFilterExpression($expression, new PrefixIdentifier($alias))
        );
    }

    public abstract function alias(): string;
}
