@extends('layouts.master')


@section('content')
<hr>


	

	@foreach($posts as $post)
	<div class="row">
		@include('posts.post')

	<!-- <div class="col">
		 <div class="card " style="width: 20rem;">
		  <img class="card-img-top" src="..." alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title">{{$post->title}}</h4>
		    <p class="card-text">{{$post->body}}</p>
		    <a href="/posts/{{$post->id}}" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>
	</div> -->
	</div>
	@endforeach
	

@endsection

@section('footer')

	

@endsection
