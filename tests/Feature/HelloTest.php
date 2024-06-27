<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get('/hello')->assertSeeText('Felix');
    }

    public function testHelloWorld()
    {
        $this->get('/world')->assertSeeText('Hello World : Felix');
    }

    public function testHelloView()
    {
        $this->view('hello', ['name' => 'Felix'])->assertSeeText('Felix');
    }

    public function testHelloWorldView()
    {
        $this->view('hello.world', ['name' => 'Felix'])->assertSeeText('Hello World : Felix');
    }
}
