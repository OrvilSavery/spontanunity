<?php

use App\Http\Controllers\Auth\PasswordController;

/**
 * Created by PhpStorm.
 * User: thansom
 * Date: 1/25/16
 * Time: 12:51 AM
 */
class PasswordControllerTest extends PHPUnit_Framework_TestCase
{
    public function testUserShouldBeRedirectedToHomeWhenPasswordIsIncorrect(){
        $password_controller = new PasswordController();
        $this->assertEquals('/home',$password_controller->redirectPath());
    }
}
