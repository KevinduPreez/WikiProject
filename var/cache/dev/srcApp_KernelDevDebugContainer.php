<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8OBacCr\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8OBacCr/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8OBacCr.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8OBacCr\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8OBacCr\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '8OBacCr',
    'container.build_id' => 'c8e0098f',
    'container.build_time' => 1588582404,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8OBacCr');
