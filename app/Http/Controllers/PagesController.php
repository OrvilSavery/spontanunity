<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        if(Auth::guest()) {
            return view('pages.home');
        }
        return view('pages.dashboard');
    }
}
