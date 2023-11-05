<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('register');
    }

    public function register(Request $request)
    {
        $request->session()->put('username', $request->input('username'));

        return redirect('/login');
    }

    public function showRegForm()
    {
        return view('register');
    }

    protected function guard()
    {
        return \Auth::guard();
    }

    protected function authenticated(Request $request, $user)
    {
        
    }
}
