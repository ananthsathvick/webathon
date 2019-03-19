<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //Validate the form data
        $this->validate($request,[
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|string|min:8'
        ]);
        //Attempt to log the user in 
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
            //if successful , then redirtect to their intentded location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        //if unsuccessful, then redirect bak with the form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
