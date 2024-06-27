<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testIncludeWithoutTitle()
    {
        $this->view('include')
            ->assertSeeText('Xilef')
            ->assertSeeText('Selamat datang di website kami')
            ->assertSeeText('Welcome');
    }

    public function testIncludeWithTitle()
    {
        $this->view('include', [
            'title' => 'Programmer'
        ])->assertSeeText('Programmer')
            ->assertDontSeeText('Xilef')
            ->assertSeeText('Selamat datang di website kami')
            ->assertSeeText('Welcome');
    }
}
