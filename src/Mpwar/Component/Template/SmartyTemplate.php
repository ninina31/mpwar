<?php

namespace Mpwar\Component\Template;
use Smarty;

class SmartyTemplate implements TemplateInterface
{
  public function __construct(argument)
  {
    $this->engine = new Smarty();
  }

  public function render($template, $parameters = array())
  {
    $this->assignVariables($parameters);
    return $this->engine->fetch($template);
  }

  public function assignVariables($parameters)
  {
    foreach ($parameters as $key => $value) {
      $this->engine->assign($key, $value);
    }
  }
}
