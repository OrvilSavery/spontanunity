<?php

use App\Http\Controllers\Auth\AuthController;

class AuthControllerTest extends TestCase
{

    public function testLoginPath(){
        $auth_controller = new AuthController();
        $this->assertEquals('/',$auth_controller->loginPath());
    }

    public function testUserNameIsEmailField(){
        $auth_controller = new AuthController();
        $this->assertEquals('email',$auth_controller->loginUsername());
    }
}
