<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index(){

        $posts = Post::paginate(5);
        return view('posts.index', [
                'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            
            'body' => 'required',
            

        ]);

        auth()->user()->posts()->create([
            'body'=>   $request->body
        ]);



        return back();

        // Post::create([
        //     'user_id'=> auth()->id,
        //     'body'=>   $request->body
        // ]);
        // dd($request->body);
    }
}
