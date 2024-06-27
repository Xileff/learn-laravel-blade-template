<?php

namespace App\Services;

class HelloService
{
  function sayHello(string $name): string
  {
    return "Hello $name";
  }
}
