<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelLevelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->withPhpSets(php84: true)
    ->withSets([
        LaravelLevelSetList::UP_TO_LARAVEL_120,
    ])
    ->withTypeCoverageLevel(49)
    ->withDeadCodeLevel(49)
    ->withCodeQualityLevel(79);
