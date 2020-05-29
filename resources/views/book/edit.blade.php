@extends('layouts.app')




<div class="panel panel-default container">
    <div class="panel-heading">
        <h3 class="mt-5">Edit Book</h3>
    </div>
    <div class="panel-body">
        <form id="form" class="form-inline" action="{{route('book.update', $book->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="bookTitle">Title:</label>
                <input type="text" id="bookTitle" class="form-control" name="title" value="{{$book->title}}">
            </div>
            <div class="form-group">
                <label for="bookAuthor">Author:</label>
                <input type="text" id="bookAuthor" class="form-control" name="author" value="{{$book->author}}">
            </div>
            <div class="form-group">
                <label for="bookUrl">Year:</label>
                <input type="text" id="bookYear" class="form-control" name="year" value="{{$book->year}}">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Edit Book">
        </form>
    </div>
</div>
