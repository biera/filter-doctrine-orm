<?php declare(strict_types=1);

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

const TEST_DATABASE_PATH = '/tmp/movies-db.sqlite3';

require_once 'vendor/autoload.php';

$config = Setup::createAnnotationMetadataConfiguration(
    [__DIR__.'/../src/Test/Entity'],
    true,
    null,
    null,
    false
);

return EntityManager::create(
    [
        'driver' => 'pdo_sqlite',
        'path' => TEST_DATABASE_PATH
    ],
    $config
);
