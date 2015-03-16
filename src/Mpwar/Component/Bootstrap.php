<?php

  namespace Mpwar\Component;
  use Mpwar\Component\Request\Request;
  use Mpwar\Component\Routing\Routing;
  use Mpwar\Component\Routing\Route;

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
