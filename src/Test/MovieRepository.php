<?php declare(strict_types=1);

namespace Biera\Filter\Binding\Doctrine\ORM\Test;

use Doctrine\ORM\QueryBuilder;
use Biera\Filter\Binding\Doctrine\ORM\Repository;
use Biera\Filter\Operator as FilterExpression;
use Biera\Filter\Test\FilterableCollection;

class MovieRepository extends Repository implements FilterableCollection
{
    public function findByFilters(FilterExpression $expression): array
    {
        return array_map(
            function (array $record) {
                return $record['title'];
            },
            $this->filter($expression)->getQuery()->getArrayResult()
        );
    }

    public function createQueryBuilder($alias, $indexBy = null): QueryBuilder
    {
        return $this->_em->createQueryBuilder()
            ->select("$alias.title")
            ->from($this->_entityName, $alias, $indexBy)
            ->join("$alias.genre", 'genre')
            ->join("$alias.actors", 'actor')
            ->orderBy("$alias.title")
            ->groupBy("$alias.id");
    }

    public function alias(): string
    {
        return 'movie';
    }
}
