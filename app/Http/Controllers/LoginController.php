<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;


class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
	
		$Admin = admin::where('username', $request->username)
					->where('password', $request->password)
					->first();
					//echo($Admin->id);

		//print_r($Admin);
		if($Admin->id > 0){
			$request->session()->put('id', $Admin->id);
			$request->session()->put('uname', $Admin->username);
			$request->session()->put('type', $Admin->type);
			return redirect()->route('admin.index');

		}else{

			$request->session()->flash('msg', 'invalid username/password');
			return redirect()->route('login.index');
		}
	}
}


