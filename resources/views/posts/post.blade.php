
<div class="card-body">
	<a href="/posts/{{$post->id}}">
		<h4 class="card-title">{{$post->title}}</h4>
	</a>
	<p class="card-text">{{$post->created_at->toFormattedDateString()}}</p>
	<p class="card-text">{{$post->body}}</p>
	
</div>