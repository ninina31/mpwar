<?php

namespace Mpwar\Component\Routing;

class Route
{
  
  private $controller;
  private $action;

  function __construct($controller, $action)
  {
    $this->controller = $controller;
    $this->action = $action;
  }

  public function getController()
  {
    return $this->controller;
  }

  public function getAction()
  {
    return $this->action;
  }
}
