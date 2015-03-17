<?php

namespace Mpwar\Component\Routing;

class Route
{
  
  protected $controller;
  protected $action;

  function __construct($controller, $action)
  {
    $this->controller = $controller;
    $this->action = $action;
  }

  public function getValue($key)
  {
    
  }
}
