<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBz82GpX\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBz82GpX/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerBz82GpX.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerBz82GpX\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerBz82GpX\appAppKernelProdContainer([
    'container.build_hash' => 'Bz82GpX',
    'container.build_id' => 'b7389cfa',
    'container.build_time' => 1707659464,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBz82GpX');