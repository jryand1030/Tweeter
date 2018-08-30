@extends('layouts')

<h1 class="text-center"> Edit tweets</h1>




<form class="form-horizontal" role="form" method="post" action="/posts/{{ $post->id }}">
{{ csrf_field() }}
	<input type="hidden" name="_method" value="put">
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}">
		</div>
	</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="body">{{ $post->body }}</textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="edit" name="submit" type="submit" value="save changes" class="btn btn-primary">
			<form action='/posts/{{ $post->id }}' method="post">
            <input id="delete" name="destroy" type="hidden" value="delete" class="btn btn-danger">
			<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
		</div>
	</div>
</form>
<a href="/posts">Back to home</a>
