<?php

namespace DiContainerBenchmarks\Container\Symfony\Resource;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMxxZxkP\CompiledSingletonContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMxxZxkP/CompiledSingletonContainer.php') {
    touch(__DIR__.'/ContainerMxxZxkP.legacy');

    return;
}

if (!\class_exists(CompiledSingletonContainer::class, false)) {
    \class_alias(\ContainerMxxZxkP\CompiledSingletonContainer::class, CompiledSingletonContainer::class, false);
}

return new \ContainerMxxZxkP\CompiledSingletonContainer([
    'container.build_hash' => 'MxxZxkP',
    'container.build_id' => '3f758ab1',
    'container.build_time' => 1562605115,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMxxZxkP');
