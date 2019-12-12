<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;


class RegisterController extends Controller
{
    

	public function index(){

		return view('register.index');
	}



 function insert(Request $req){



        $user = new user();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = "customer";
        
    
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('register.index');
        }
    }




	

}
