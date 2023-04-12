<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        var_dump("SSSS");
        // $this->middleware('auth', ['uri' => 'user']);
    }
    public function index($var = null)
    {
        # code...
    }
}
