<?php

namespace Mpwar\Component\Template;
use Twig_Loader_Filesystem;
use Twig_Environment;

class TwigTemplate implements TemplateInterface
{

  private $twig;
  
  public function __construct()
  {
    $loader = new Twig_Loader_Filesystem('../src/Views');
    $this->twig = new Twig_Environment($loader, array('cache' => '../cache'));
  }

  public function render($template, $parameters = array())
  {
    $this->twig->render($template, $parameters);
  }
}
