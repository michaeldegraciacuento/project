<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminTMLoginController extends Controller
{   
    
    public function __construct()
    {
        $this->middleware('guest:tm');
    }
    public function showLoginForm()
    {
        return view('auth.tm-login'); 
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('tm')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('tm.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
