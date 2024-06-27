<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view('each', [
            'users' => [
                [
                    'name' => 'Felix',
                    'hobbies' => ['Coding', 'Gaming']
                ],
                [
                    'name' => 'Xilef',
                    'hobbies' => ['Eating', 'Sleeping']
                ]
            ]
        ])
            ->assertSeeInOrder(['.red', 'Felix', 'Coding', 'Gaming', 'Xilef', 'Eating', 'Sleeping']);
    }
}
