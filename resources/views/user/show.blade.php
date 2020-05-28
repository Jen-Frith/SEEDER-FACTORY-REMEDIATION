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
            <td>Settings</td>
        </tr>
        @endforeach
     
    </tbody>
  </table>