<?php

class InvalidRateException extends InvalidArgumentException
{
  public function __construct()
  {
    $this->message = "Rate must be strictly above 1";
  }
}
