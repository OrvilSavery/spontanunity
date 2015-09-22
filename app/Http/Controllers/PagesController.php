<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Confirmation Page
     */
    public function confirm()
    {
        return view('pages.confirm');
    }
}
