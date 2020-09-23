<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class LoginController extends Controller
{
      public function index()
      {

    	return view('login.index');
      }

    public function verify(Request $req)
    {
        
        $user = Admin::where('uname', $req->uname)
            ->where('password', $req->pass)
            ->first();

    	if($user){
            $req->session()->put('uname', $req->uname);
    		return redirect()->route('admin.index');
    	}else{

    		return redirect('/login');

    	 }
    	}
   
 }


