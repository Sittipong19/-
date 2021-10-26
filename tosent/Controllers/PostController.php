<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost(){

    
    return view('add-post');
    }
    public function savePost(Request $request)
    {
        DB::table('products')->insert([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'description'=>$request->description,
            'gallery'=>$request->gallery
        ]);
        return back()->with('post_add','สินค้าถูกเพิ่มแล้ว.');
    }
    public function postList(){
        $posts = DB::table('products')->get();
        return view('post-list',compact('posts'));
        
    }
    public function editPost($id){
        $post = DB::table('products')->where('id',$id)->first();
        return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request)
    {
        DB::table('products')->where('id', $request->id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'description'=>$request->description,
            'gallery'=>$request->gallery,
            'updated_at'=>'current_timestamp'
        ]);
        return back()->with('post_update','Item Updated');
    }

    public function deletePost($id){
        DB::table('products')->where('id',$id)->delete();
        return back()->with('post_delete','Item Deleted');
    }
}
