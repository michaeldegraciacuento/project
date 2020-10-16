<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class TvetLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:tvet');
    }
    public function showLoginForm()
    {
        return view('auth.tvet-login'); 
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('tvet')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('tvet.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
