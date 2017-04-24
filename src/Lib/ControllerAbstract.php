<?php

namespace Asaph\Lib;



use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

abstract class ControllerAbstract
{
    /**
     * @var Container $container
     */
    protected $container;

    /**
     * ControllerAbstract constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param array $params
     * @return Response
     */
    abstract public function __invoke(Request $request, Response $response, $params=[]);
}
