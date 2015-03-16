<?php

  namespace Mpwar\Component\Bootstrap;

  class Bootstrap
  {

    public function execute()
    {
      $route = new Routing();
      return $route->getRoute();
    }

    public function executeController()
    {
      
    }
  }
