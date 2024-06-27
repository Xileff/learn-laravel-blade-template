<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeWhen()
    {
        $this->view('include-condition', [
            'user' => [
                'name' => 'Felix',
                'isOwner' => true
            ]
        ])
            ->assertSeeText('Selamat datang Owner')
            ->assertSeeText('Selamat datang Felix');

        $this->view('include-condition', [
            'user' => [
                'name' => 'Felix',
                'isOwner' => false
            ]
        ])
            ->assertDontSeeText('Selamat datang Owner')
            ->assertSeeText('Selamat datang Felix');
    }
}
