<?php

  namespace Mpwar\Controller;

  abstract class BaseController
  {

    protected $request;
    
    public function __construct(Request $request)
    {
      $this->request = $request;
      echo "Soy BaseController -";
    }

  }
