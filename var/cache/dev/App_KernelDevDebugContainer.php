<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6WqEBIy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6WqEBIy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6WqEBIy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6WqEBIy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6WqEBIy\App_KernelDevDebugContainer([
    'container.build_hash' => '6WqEBIy',
    'container.build_id' => 'a799e843',
    'container.build_time' => 1610567216,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6WqEBIy');
