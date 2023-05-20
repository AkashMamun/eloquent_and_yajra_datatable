<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(){
        return view('add_post');
    }
    public function createPost(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
        return $post;
        // return "Post has been created Successfully";
        
    }
    public function getPosts(){
        $posts = Post::all();
        return view('all_post',['posts'=>$posts]);
    }
    public function deletePost($id){
        Post::where('id',$id)->delete();
        return "Post is deleted successfully!";
    }
    public function updatePost(Request $request){
        $post = Post::where('id',$request->id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return "Post has been updated successfully";
    }
    public function updateForm($id){
        $post = Post::where('id',$id)->first();
        return view('edit_post',['post'=>$post]);
    }
}
