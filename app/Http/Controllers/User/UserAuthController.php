<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    public function getLogin(){
        return view('user.login.index');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
 
        if(auth()->guard('user')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('user')->user();
            // dd($user);
            if($user->is_admin != 1){
                return redirect()->route('userDashboard')->with('success','You are Logged in sucessfully.');
            } else {
                return redirect(route('userLogin'))->with('error', 'Tài khoản đăng nhập của bạn không đúng.');
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }
    }
 
    public function getLogout(Request $request)
    {
        auth()->guard('user')->logout();
        Session::flush();
        Session::put('success', 'You are logout sucessfully');
        return redirect(route('userLogin'));
    }
}
