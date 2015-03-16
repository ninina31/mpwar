<?php

  namespace Mpwar\Component\Response\JsonResponse;

  class JsonResponse extends ResponseAbstractClass
  {

    public function send()
    {
      if ($this->status != 200) {
        header('HTTP/1.0 404 Not found');
      }

      header('Content-Type: application/json');

      if (!is_array($this->content)) {
        
      }

      echo $this->content;
    }
  }
