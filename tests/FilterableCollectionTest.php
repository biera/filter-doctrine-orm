<?php declare(strict_types=1);

use Biera\Filter\Binding\Doctrine\ORM\Test\Entity\Movie;
use Biera\Filter\Test\FilterableCollection;
use Biera\Filter\Test\Suite;

class FilterableCollectionTest extends Suite
{
    private static FilterableCollection $filterableCollection;

    public function getFilterableCollection(): FilterableCollection
    {
        return self::$filterableCollection;
    }

    public static function setUpBeforeClass(): void
    {
        /** @var \Doctrine\ORM\EntityManagerInterface $entityManager */
        $entityManager = include __DIR__ . '/../config/entity-manager.php';
        self::$filterableCollection = $entityManager->getRepository(Movie::class);

        self::loadSQLSchemaAndData(
            $entityManager->getConnection()
                // returns \Doctrine\DBAL\Driver\PDO\Connection
                ->getWrappedConnection()
                // returns\PDO
                ->getWrappedConnection()
        );
    }

    public static function tearDownAfterClass(): void
    {
        if (file_exists(TEST_DATABASE_PATH)) {
            unlink(TEST_DATABASE_PATH);
        }
    }
}
