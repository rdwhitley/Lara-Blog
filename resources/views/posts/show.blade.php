@extends('layouts.main')

@section('title')
app-title
@endsection

@section('sidebar')
this is the side menu
@endsection

@section('content')
	<h3>{{ $post->title }}</h3>
	<h4>{{ $post->content}}</h4>
@endsection