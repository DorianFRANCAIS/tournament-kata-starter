<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9BDRMkw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9BDRMkw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9BDRMkw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9BDRMkw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container9BDRMkw\App_KernelDevDebugContainer([
    'container.build_hash' => '9BDRMkw',
    'container.build_id' => 'a66defb3',
    'container.build_time' => 1635518953,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9BDRMkw');
