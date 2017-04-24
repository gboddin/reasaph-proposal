<?php
/**
 * Gets the application root dir from our __DIR__'s parent
 */

define('APP_DIR', dirname(__DIR__));
define('CONFIG_DIR', APP_DIR.DIRECTORY_SEPARATOR.'config');

/**
 * Load composer autoloading :
 */
require(implode(DIRECTORY_SEPARATOR, [APP_DIR, 'vendor', 'autoload.php']));

/**
 * Load models and database configuration :
 */
include(implode(DIRECTORY_SEPARATOR, [CONFIG_DIR, 'db', 'config.php']));
