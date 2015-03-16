<?php

//use Twig\

namespace Mpwar\Component\Template;

class TwigTemplate implements TemplateInterface
{
  
  public function __construct()
  {
    $loader = new Twig_Loader_Filesystem('/path/to/templates');
    $twig = new Twig_Environment($loader, array('cache' => '/path/to/compilation_cache',));
  }

  public function render($template, $parameters = array())
  {
    echo "bla";
  }
}
?>
