<?php

  namespace Mpwar\Component\Bootstrap;

  class Bootstrap
  {

    public function execute()
    {
      $routing = new Routing();
      $route = $routing->getRoute();
      return $this->executeController($route);
    }

    public function executeController(Route $route)
    {
      $controller = $route->getValue('controller');
      return $controller->$route->getValue('action');
    }
  }
