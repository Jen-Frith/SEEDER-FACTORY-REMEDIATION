<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){

return view('user.create');

    }


public function store(Request $request){

$post=new Post();

$post->title= request('title');
$post->text=request('text');

$post->save();



    echo('votre demande a bien été traité');


}


public function show(){

$posts=Post::all();

return view ('user.show', compact('posts'));



}



}
