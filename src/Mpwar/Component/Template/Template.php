<?php

namespace Mpwar\Component\Template\TemplateInterface;

interface TemplateInterface
{
  
  public function __construct();

  public function render($template, $parameters = array());

}
