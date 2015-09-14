<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Mail;
use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class EmailsController extends Controller
{
    /**
     * @var Subscriber
     */
    private $subscriber;

    /**
     * EmailsController constructor.
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }


    /**
     * Initial Email Message
     */
    public function index()
    {

    }

    /**
     * Store Email Address in DB
     */
    public function store()
    {
        $input = Request::all();

        if(!$input['email']) {
            return redirect()->back()->with(Session::flash('error', 'Please enter a valid email address'));
        }

        if ($this->subscriber->where('email', $input['email'])->first())
        {
            return redirect()->back()->with(Session::flash('success', 'You have already submitted your email address. Thank you for your interest, we will send you an update as soon as the beta app launch begins!'));
        }

        $subscriber = new Subscriber;
        $subscriber->email = $input['email'];
        $subscriber->save();

        return redirect()->back()->with(Session::flash('success', 'Thank you! Thank you for your interest, we will send you an update as soon as the beta app launch begins!'));

    }

}
