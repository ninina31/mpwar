<?php

namespace Mpwar\Component\Template;

interface TemplateInterface
{

  protected $engine;
  
  public function __construct();

  public function render($template, $parameters = array());

}
