<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppLoginTest extends TestCase
{

    public function testNewUserRegistration(){

        $this->visit('/login')
            ->type('Than','name')
            ->seePageIs('/dashboard');
//        ->type('Taylor', 'name')
//        ->check('terms')
//        ->press('Register')
//        ->seePageIs('/dashboard');
    }
}
