<?php

  namespace Mpwar\Component;

  class Bootstrap
  {

    public function getController()
    {
      $route = new Routing();
      return $route->getRoute();
    }
  }
