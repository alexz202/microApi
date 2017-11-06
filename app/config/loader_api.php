<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'ZejiHRProj\Models' => APP_PATH . '/common/models/',
    'ZejiHRProj\Lib'        => APP_PATH . '/common/library/',
    'ZejiHRProj\Modules\Backend' => APP_PATH . '/modules/backend/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'ZejiHRProj\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'ZejiHRProj\Modules\Backend\Module' => APP_PATH . '/modules/backend/Module.php',
    'ZejiHRProj\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();
