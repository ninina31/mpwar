<?php

  namespace Mpwar\Component;

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
      foreach ($json_array as $url_action) {
        echo $url_action;
        if ($url_action['uri'] == $this->uri) {
          return array('controller' => $url_action['controller'], 'action' => $url_action['action']);
        }
      }
      return array('controller' => '\\App\\Controller\\Exceptions\\Exceptions', 'action' => 'notFound');
    }
  }
?>
