<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('uname')){
    		return view('admin.index');
    	}else{
    		return redirect('/login');
    	}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    public function reg()
    {
        return view('admin.reg');
    }
    public function register(Request $request)
    {
        $Admin = new admin();
        $Admin->username=$request->username;
        $Admin->password =$request->password;
        $Admin->type =$request->type;
        $Admin->email =$request->email;

        if($Admin->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('admin.reg');
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Admin = new admin();
        $Admin->username=$request->username;
        $Admin->password =$request->password;
        $Admin->type =$request->type;
        $Admin->email =$request->email;

        if($Admin->save()){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
            $User = \App\admin::all();
            return view('admin.list')->with('User', $User);
    }

    public function details(admin $admin,$id)
    {
            $User = \App\admin::find($id);
            return view('admin.details')->with('user', $User);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = admin::find($id);
    	return view('admin.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Admin = admin::find($id);
		$Admin->username=$request->username;
        $Admin->password =$request->password;
        $Admin->type =$request->type;
        $Admin->email =$request->email;
        $Admin->save();
		
    	return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$Admin = \App\admin::find($id);
		$Admin ->delete();
        return redirect()->route('admin.index');
    }
}
