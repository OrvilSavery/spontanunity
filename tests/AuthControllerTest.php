<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Auth\AuthController;
use App\User;

class AuthControllerTest extends TestCase
{

    public function testLoginPath(){
        $auth_controller = new AuthController();
        $this->assertEquals('/auth/login',$auth_controller->loginPath());
    }

    public function testUserNameIsEmailField(){
        $auth_controller = new AuthController();
        $this->assertEquals('email',$auth_controller->loginUsername());
    }
}
