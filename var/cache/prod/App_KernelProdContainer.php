<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHjwniMu\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHjwniMu/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHjwniMu.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHjwniMu\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerHjwniMu\App_KernelProdContainer([
    'container.build_hash' => 'HjwniMu',
    'container.build_id' => '329ab3bc',
    'container.build_time' => 1670922595,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHjwniMu');
