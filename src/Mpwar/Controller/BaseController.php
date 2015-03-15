<?php

  namespace Mpwar\Controller;
  use Twig\Autoloader;

  abstract class BaseController
  {
    private $twig;
    
    public function __construct(argument)
    {
      $loader = new Twig_Loader_Filesystem('../src/Views');
      $this->twig = new Twig_Environment($loader);
      echo "Soy BaseController";
    }

    public function render($template, $data)
    {
      return $this->twig->render($template, $data);
    }

  }
