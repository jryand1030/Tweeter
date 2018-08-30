@extends('layouts')

<a href="/posts/{{$post->id}}/edit"> edit post </a>

<h2> {{$post->title}}</h2>

<p> {{$post->body}} </p>

<a href="/posts">Back to home</a>
