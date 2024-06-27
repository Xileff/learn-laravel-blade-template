<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIsset()
    {
        // No name and hobbies
        $this->view('isset-empty', [])
            ->assertDontSeeText('Hello')
            ->assertSeeText("I don't have any hobbies", false);

        // Has name
        $this->view('isset-empty', ['name' => 'Felix'])
            ->assertSeeText('Hello my name is Felix')
            ->assertSeeText("I don't have any hobbies", false);

        // Has name and hobbies
        $this->view('isset-empty', [
            'name' => 'Felix',
            'hobbies' => ['Coding']
        ])
            ->assertSeeText('Hello my name is Felix')
            ->assertDontSeeText("I don't have any hobbies", false);
    }
}
