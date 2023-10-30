<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->session()->put('username', $request->input('username'));

        return redirect('/dashboard');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    protected function guard()
    {
        return \Auth::guard();
    }

    protected function authenticated(Request $request, $user)
    {
        
    }
}
