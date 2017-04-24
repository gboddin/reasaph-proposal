<?php
// Bootstrap :
require(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'src', 'bootstrap.php']));

// Load services DI
$container = new \Slim\Container(
    require(CONFIG_DIR.DIRECTORY_SEPARATOR.'app.container.php')
);

// Create slim app
$app = new \Slim\App($container);

// Add route from config
foreach($container->get('routing') as $route) {
    call_user_func_array([$app,'map'], $route);
}

$app->run();