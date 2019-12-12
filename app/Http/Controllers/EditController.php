<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
use Mail;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
       
        //$file = File::find($id);
        //$files = File::orderBy('created_at','DESC')->paginate(30);
       // return view('edit.index')->with('file', $file);
        return view('edit.index');
    }
}
