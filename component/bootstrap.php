<?php

  namespace ninina31\component;

  class Bootstrap
  {
    
    public function __construct()
    {
      echo "Bootstrap";
    }

    public function execute()
    {
      $route = new Routing();
      return $route->getRoute();
    }
  }
?>
