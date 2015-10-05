<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventsControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    //return first four random events from database when no user profile available
    //return four events based on user profile

    public function testReturnFourFirstFourEventsInDatabaseWhenUserProfileDoesNotSpecifyLevel(){

    }
}
