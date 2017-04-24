<?php
return [
    'config' => function($c) {
        return new Config\Config(CONFIG_DIR.DIRECTORY_SEPARATOR.'app.config.yaml');
    },
    'view' =>  function ($c) {
        $view = new \Projek\Slim\Plates([
            // Path to view directory (default: null)
            'directory' =>
                APP_DIR.DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.$c->get('config')->get('view.template')
        ], $c->get('response'));
        $view->loadExtension(new Projek\Slim\PlatesExtension(
            $c->get('router'),
            $c->get('request')->getUri()
        ));
        $view->addData(['config' => $c->get('config')]);
        return $view;
    },
    'routing' => function($c) {
        return $c->get('config')->get('routing');
    }
];