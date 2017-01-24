<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        //La idea es que la url todos mostre els TODOS de l'usuari logat.

        $user = factory(\App\User::class)->make();
        $task = factory(\App\Task::class);

        $user->addTask($task);
        $this->actingAs($user)
             ->visit('/tasks')
             ->see($task->name);
    }
}