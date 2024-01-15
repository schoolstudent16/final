<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordNoteController extends Controller
{
    public function index(Request $request){
        if($request->verify==1){
            return view("final.account");
        }else {
            return view("final.login");
        }
        
    }
}
