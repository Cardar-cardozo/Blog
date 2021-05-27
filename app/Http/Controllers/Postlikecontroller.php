<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

class Postlikecontroller extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    public function store(Post $post, Request $request){
        // dd($post->likedby($request->user()));

        


        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);


        return back();
        // dd($request->user()->id);
        // dd($post->likes()->user_id);
    }

    public function destroy(Post $post, Request $request){
        $request->user()->likes()-where('post_id', $post->id)-delete();
        return back();
    }
}
