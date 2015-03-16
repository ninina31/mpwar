<?php

namespace Mpwar\Component\Template;

class SmartyTemplate implements TemplateInterface
{

  protected $engine;
  
  public function __construct(argument)
  {
    $this->engine = new Smarty();
  }

  public function render($template, $parameters = array())
  {
    echo "ble";
  }
}
?>
