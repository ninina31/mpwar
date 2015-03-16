<?php

  namespace Mpwar\Component\Routing;

  class Routing
  {
    private $uri;
    
    public function __construct()
    {
      $this->uri = $_SERVER['REQUEST_URI'];
      echo $this->uri . '-';
    }

    public function getRoute()
    {
      $string = file_get_contents('../src/Config/Routing.json');
      $json_array = json_decode($string, true);
      foreach ($json_array as $key => $url_action) {
        if ($url_action['uri'] == $this->uri) {
          return new Route($url_action['controller'], $url_action['action']);
        }
      }
      return new Route("\\Controller\\Exceptions\\Exceptions", 'NotFound');
    }
  }
