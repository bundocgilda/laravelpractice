<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index(){

    	$posts = Posts::orderBy('created_at','desc')->get();
    	return view('posts.index', compact('posts'));

    }

    public function show(Posts $post){

    	return view('posts.show', compact('post'));

    }

    public function create(){

    	return view('posts.create');
    	
    }

     public function store(){

    	//dd(request()->all());
     	//$post = new Posts;

     	// $post->title = request('title');
     	// $post->body = request('body');

     	$this->validate(request(), [
     		'title' => 'required',
     		'body' => 'required',
     	]);

     	Posts::create([
     		'title' => request('title'),
     		'body' => request('body'),
     	]);

     	//$post->save();

     	return redirect('/');

    	
    }
}
