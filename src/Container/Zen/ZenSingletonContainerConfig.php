<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Zen;

use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Fixture\Class1000;
use WoohooLabs\Zen\Config\AbstractContainerConfig;

class ZenSingletonContainerConfig extends AbstractContainerConfig
{
    protected function getEntryPoints(): array
    {
        return [
            Class10::class,
            Class100::class,
        ];
    }

    protected function getDefinitionHints(): array
    {
        return [];
    }

    protected function getWildcardHints(): array
    {
        return [];
    }
}