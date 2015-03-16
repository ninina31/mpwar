<?php

  namespace Mpwar\Component\Bootstrap;
  use Mpwar\Component\Request\Request;
  use Mpwar\Component\Session\Session;

  class Bootstrap
  {

    protected $request;

    public function __construct()
    {
      $this->request = new Request(new Session);
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
      return $controller->$route->getValue('action');
    }
  }
