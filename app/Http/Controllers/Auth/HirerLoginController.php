<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class HirerLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:hirer');

	}

    public function showLoginForm()
    {
    	return view('auth.hirer-login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);


    	if(Auth::guard('hirer')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
    		return redirect()->intended(route('hirer.dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('email','remember'));

    }
}
