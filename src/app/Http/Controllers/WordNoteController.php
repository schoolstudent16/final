<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use App\Models\category;
use App\Models\words;
class WordNoteController extends Controller
{
    public function transition(Request $request){
        //$items = words::join("account", "words.user_id","=","account.user_id")->join("category", "words.category_id","=","category.category")->get();
        $items = words::join("category","words.category_id","=","category.category_id")->distinct()->select("word_id","category.*")->get();
        return view("final.top",["items"=>$items]);
    }
    public function sql_select(Request $request){
        $items = words::get();
        return view("final.show",["items"=>$items]);
    }
    
}
