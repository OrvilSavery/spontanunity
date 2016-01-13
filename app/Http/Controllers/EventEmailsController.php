<?php

namespace App\Http\Controllers;


use Mail;
use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class EventEmailsController extends Controller
{
    /**
     * EventEmailsController constructor.
     */
    public function __construct()
    {

    }


    /**
     * Initial Email Message
     */
    public function index(){
        return view('emails.event');
    }



}
