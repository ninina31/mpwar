<?php

use Twig;

namespace Mpwar\Component\Template;

class TwigTemplate implements TemplateInterface
{

  private $twig;
  
  public function __construct()
  {
    $loader = new Twig_Loader_Filesystem('../src/Views');
    $this->twig = new Twig_Environment($loader, array('cache' => '/path/to/compilation_cache'));
  }

  public function render($template, $parameters = array())
  {
    $this->twig->render($template, $parameters);
  }
}
