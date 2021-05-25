<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()

    {
     $post = Post::all();
    // $post -> delete();
    // dd('delete');

        $posts = Post::orderBy('title')->get();
      
        return view('Articles', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        // $posts = [
        //     1 => 'mon titre n1',
        //     2 => 'mon titre n2'
        // ];

        // $post = Post::findOrFail($id);

        $post = Post::where('title','Velit ea iste consequatur iusto.')->firstOrFail();


        return view('Article', [
            'post' => $post

        ]);
    }

    public function create()

    {
        return view('form');
    }
    public function store(Request $request)

    {   // first method 1

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        // dd('post created');


        //second method 2
        Post::create([
            'title' => $request->title,
            'content' => $request-> content
        ]);
       
    }

    public function contact()

    {
        return view('contact');
    }
}
