<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UserController extends Controller
{
    
    public function editProfile(User $user)
    
    {

        return view('auth.editProfile',compact('user'));
    
    }
    public function report(Request $request)
	{
		return \Redirect::to('report');
	}
}
