@extends('layouts.app')

<div id="appBook">
	{{-- <books></books> --}}
</div>

  <div id="app" class="container">
	<div class="page-header">
		<h1 class="mb-5 pb-5">Let's see what we have</h1>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="mt-5">Add Book</h3>
		</div>
		<div class="panel-body">
            <form id="form" class="form-inline" action="{{route('book.store')}}" method="POST">
                @csrf
				<div class="form-group">
					<label for="bookTitle">Title:</label>
					<input type="text" id="bookTitle" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="bookAuthor">Author:</label>
					<input type="text" id="bookAuthor" class="form-control" name="author">
				</div>
				<div class="form-group">
					<label for="bookUrl">Year:</label>
					<input type="text" id="bookYear" class="form-control" name="year">
				</div>
				<input type="submit" class="btn btn-primary ml-2" value="Add Book">
			</form>
		</div>
	</div>




	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="mt-5">Books List</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead><tr>
					<th>Title</th>
                    <th>Author</th>
                    <th>Year</th>

					<th>Settings</th>
				</tr></thead>
				<tbody>
                    @foreach ($books as $book)
                        
					<tr v-for="book in books">
                        <td>
                            {{$book->title}}	
                        </td>
						<td>
                            {{$book->author}}	

                        </td>
                        <td>
                            {{$book->year}}	

						</td>
						<td><div class="d-flex">
                          <div><a href="{{route('book.edit', $book->id)}}"><button class="btn btn-warning">Edit</button></a></div> 
                    <form action="{{route('book.destroy', $book->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <a href=""><button class="btn btn-danger ml-3">Delete</button></a>

                    </form>

                    </div>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
  </div>
