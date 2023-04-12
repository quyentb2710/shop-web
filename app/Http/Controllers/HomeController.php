<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index() 
    {
        // phpinfo();
        // return response()->
    }
}
