<?php declare(strict_types=1);

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'vendor/autoload.php';

return ConsoleRunner::createHelperSet(
    require_once __DIR__ . '/entity-manager.php'
);
