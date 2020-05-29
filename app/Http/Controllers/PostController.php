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

return view('welcome');

}


public function show(){

$posts=Post::all();

return view ('user.show', compact('posts'));

}

public function edit($id){

$post=Post::find($id);
return view ('user.edit', compact('post'));

}

public function update(Request $request, $id){

$post=Post::find($id);

$post->title=request('title');
$post->text=request('text');

$post->save();

return redirect()->route('user.show');

}


public function destroy($id){

    $post=Post::find($id);

    $post->delete();

    return redirect()->back();

}

}
