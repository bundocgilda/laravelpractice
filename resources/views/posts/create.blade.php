@extends('layouts.master')

@section('content')

	<form method="POST" action="/posts">
		{{csrf_field()}}
	  <div class="form-group">
	  	@include('layouts.errors')
	  </div>
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Title" >
	    
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea type="textarea" class="form-control" id="body" name="body" placeholder="Say something..." ></textarea>
	  </div>
	  <div class="form-group">
	  	<button type="submit" class="btn btn-primary">Publish</button>
	  </div>
	  
	</form>

@endsection('content')