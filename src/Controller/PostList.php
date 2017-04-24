<?php

namespace Asaph\Controller;



use Asaph\Lib\ControllerAbstract;
use Slim\Http\Request;
use Slim\Http\Response;

class PostList extends ControllerAbstract
{

    public function __invoke(Request $request, Response $response, $params=[])
    {
        return $this->container->get('view')->render('post_list');
    }
}
