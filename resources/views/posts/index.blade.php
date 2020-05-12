@extends('layouts.main')

@section('title')
app-title
@endsection

@section('sidebar')
this is the side menu
@endsection

@section('content')
	@foreach($posts as $post)
		<a href='/posts/title'>
			<h1>{{ $post->title }}</h1>
			<h3>{{ $post->category->name}}</h3>
		</a>
		<p>{{ $post->content }}</p>
		<hr>
	@endforeach
@endsection