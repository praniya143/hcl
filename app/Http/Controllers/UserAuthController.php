<?php

namespace App\Http\Controllers;

use App\UserAuth;
use Illuminate\Http\Request;
use Session;

class UserAuthController extends Controller
{
    public function login(Request $request){
	    return view('login', ['error' => $request->get('error')]);
    }
    public function auth(Request $request){
	    session_start();
	    $userModel = UserAuth::where('user_name', '=', $request->get('user_name'))->first();
	    if($userModel){
		    if(md5($request->get('password')) == $userModel->password){
			   $_SESSION['user_id'] = $userModel->id;
			   $_SESSION['user_details'] = $userModel;
			   return redirect('/home');
		    }
		    return redirect('/login?error=2');
	    }else{
		    return redirect('/login?error=1');
	    }
	    $request->get('user_name');

    }
}
