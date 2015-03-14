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
      $yaml_array = yaml_parse_file('../src/Config/Routing.yml');
      foreach ($yaml_array as $url_action) {
        if ($url_action['uri'] == $this->uri) {
          return array('controller' => $url_action['controller'], 'action' => $url_action['action']);
        }
      }
      return array('controller' => '\\Controller\\Exceptions\\Exceptions', 'action' => 'notFound');
    }
  }
?>
