<?php

  namespace Mpwar\Component\Bootstrap;
  use Mpwar\Component\Request\Request;

  class Bootstrap
  {
    protected $request;

    public function __construct()
    {
      $this->request = new Request();
    }

    public function execute()
    {
      $routing = new Routing();
      $route = $routing->getRoute();
      return $this->executeController($route);
    }

    public function executeController(Route $route)
    {
      $controller = $route->getValue('controller');
      echo "hey";
      return $controller->$route->getValue('action');
    }
  }
