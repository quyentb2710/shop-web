<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 
     */
    public function index()
    {
        // var_dump("ASS");
        // var_dump(Auth::user());exit();
        return view('admin.home.index');
    }
}
