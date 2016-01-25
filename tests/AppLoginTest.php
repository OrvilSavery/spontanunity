<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppLoginTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function BasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');


    }

    public function testNewUserRegistration(){

        $this->visit('/');
//        ->type('Taylor', 'name')
//        ->check('terms')
//        ->press('Register')
//        ->seePageIs('/dashboard');
    }
}
