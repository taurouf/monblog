<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerASj9K9x\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerASj9K9x/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerASj9K9x.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerASj9K9x\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerASj9K9x\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ASj9K9x',
    'container.build_id' => '3162000a',
    'container.build_time' => 1593392901,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerASj9K9x');
