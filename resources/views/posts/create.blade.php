@extends('layouts')

<h1 class="text-center"> Create new Tweet</h1>

<form class="form-horizontal" role="form" method="post" action="/posts">
    {{ csrf_field() }}
	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
		</div>
	</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="body"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="create" name="submit" type="submit" value="create" class="btn btn-sm btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
		</div>
	</div>
</form>

<a href="/posts">Back to home</a>
