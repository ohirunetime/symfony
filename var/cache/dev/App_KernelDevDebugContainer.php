<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHD9YWUm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHD9YWUm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHD9YWUm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHD9YWUm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHD9YWUm\App_KernelDevDebugContainer([
    'container.build_hash' => 'HD9YWUm',
    'container.build_id' => '3ec9c60d',
    'container.build_time' => 1653697846,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHD9YWUm');
