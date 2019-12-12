<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\product;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{



    function indexHome(Request $request)
    {

        $user = DB::table('users')->where('userId', session('user.userId'))
        ->get(); 
    
        return view('admin.adminHome')->with('users', $user);
        
    }



    function index(Request $request){

        //$users = User::all();
		$users = DB::table('users')
                            ->where('type',"customer")
                            ->get(); 
        
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

        return view('admin.addproduct');
    }

    function insert(Request $req){



       //file upload
         
            $file = $req->file('image');
            $filename= $file->getClientOriginalName();
            $file->move('storage', $file->getClientOriginalName());
    
            $product = new product();
            $product->name = $req->pname;
            $product->description = $req->description;
            $product->price = $req->price;
            $product->quantity = $req->quantity;
            $product->ptype = $req->ptype;
            $product->image = $filename;





        if($product->save()){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('admin.add');
        }
    }
}
