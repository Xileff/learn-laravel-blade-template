<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view('form', [
            'user' => [
                'name' => 'Felix',
                'premium' => true,
                'admin' => true,
            ]
        ])
            ->assertSee('Felix')
            ->assertSee('checked')
            ->assertDontSee('readonly');

        $this->view('form', [
            'user' => [
                'name' => 'Felix',
                'premium' => false,
                'admin' => false,
            ]
        ])
            ->assertSee('Felix')
            ->assertDontSee('checked')
            ->assertSee('readonly');
    }
}
