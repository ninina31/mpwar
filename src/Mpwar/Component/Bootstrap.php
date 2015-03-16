<?php

  namespace Mpwar\Component;
  use Mpwar\Component\Request\Request;
  use Mpwar\Component\Routing\Routing;
  use Mpwar\Component\Routing\Route;

  class Bootstrap
  {

    public function execute()
    {
      $request = new Request();
      $routing = new Routing();
      $route = $routing->getRoute();
      return $this->executeController($route, $request);
    }

    public function executeController(Route $route, Request $request)
    {
      $controller = $route->getValue('controller');
      echo "hey";
      return $controller->$route->getValue('action');
    }
  }
