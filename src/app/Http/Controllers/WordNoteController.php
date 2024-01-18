<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
use App\Models\category;
use App\Models\words;
class WordNoteController extends Controller
{
    public function top(Request $request){
        //$items = words::join("account", "words.user_id","=","account.user_id")->join("category", "words.category_id","=","category.category")->get();
        $items = words::join("category","words.category_id","=","category.category_id")->distinct()->select("word_id","category.*")->get();
        return view("final.top",["items"=>$items]);
    }
    public function sql_select(Request $request){
        $items = words::get();
        return view("final.show",["items"=>$items]);
    }
    public function create_note(Request $request){
        $items = category::get();
        return view("final.word_add",["items"=>$items]);
    }
    public function insert_db(Request $request){
        category::insert(["category_id"=>category::max("category_id")+1,"category_name"=>$request->category]);
        words::insert(["word_id"=>words::max("word_id")+1,"user_id"=>1,"category_id"=>category::max("category_id"),"register_date"=>date('Y-m-d'),"word"=>$request->word,"word_content"=>$request->word_content]);
        $items = words::join("category","words.category_id","=","category.category_id")->distinct()->select("word_id","category.*")->get();
        return view("final.top",["items"=>$items]);
    }
    public function sql_delete(Request $request){
        $items = words::join("category","words.category_id","=","category.category_id")->where("word_id","=",$request->word_id)->get();
        return view("final.delete",["items"=>$items]);
    }
    public function delete(Request $request){
        words::where("word_id","=",$request->word_id)->delete();
        $items = words::join("category","words.category_id","=","category.category_id")->distinct()->select("word_id","category.*")->get();
        return view("final.top",["items"=>$items]);
    }
    public function sql_update(Request $request){
        $items = words::where("word_id","=",$request->word_id)->get();
        return view("final.update",["items"=>$items]);
    }
    public function update(Request $request){
        $update = words::find($request->word_id);
        $update->word = $request->word;
        $update->word_content = $request->word_content;
        $update->save();
        $items = words::join("category","words.category_id","=","category.category_id")->distinct()->select("word_id","category.*")->get();
        return view("final.top",["items"=>$items]);
    }
}
