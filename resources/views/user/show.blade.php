@extends('layouts.app')


<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        <th scope="col">Settings</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->text}}</td>
            <td>
            <a href="{{route('user.edit', $post->id)}}">  <button class="btn bg-warning"> Editer</button></a> 
          <form action="{{route('user.destroy', $post->id)}}" method="POST">
          @method('delete')
          @csrf
           <button class="btn bg-danger" type="submit"> Delete</button>

          </form>
          </td>
        </tr>
        @endforeach
     
    </tbody>
  </table>