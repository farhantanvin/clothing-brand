<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(Request $request){

        //$users = User::all();
		$users = DB::table('users')->get(); 
        
        if($request->session()->has('name')){
    		   	return view('admin.index')->with('users', $users);
    	}else{
    		return redirect()->route('login.index');
    	}
    }

    function details($id){
        $user = DB::table('users')->where('userId', $id)
					->get(); 
                
            return view('admin.details')->with('users', $user);
    }


    function edit($id){
        $user = DB::table('users')->where('userId', $id)
        ->get(); 
    
        return view('admin.edit')->with('users', $user);
    }
	
	function update(Request $req, $id){

    	$user = user::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type =$req->type;
        $user->save();

    	return redirect()->route('admin.index');
    }
    function delete($id){
        $user = DB::table('users')->where('userId', $id)
        ->get(); 
    
        return view('admin.delete')->with('users', $user);
    }

    function destroy($id){
    	user::destroy($id);
    	return redirect()->route('admin.index');
    }

    function add(){

        return view('admin.adduser');
    }

    function insert(Request $req){



       //file upload
        

        $user = new user();
        $user->username = $req->username;
        $user->password = $req->password;
       
    
        if($user->save()){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.add');
        }
    }
}
