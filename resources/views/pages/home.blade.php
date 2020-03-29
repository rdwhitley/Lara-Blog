@extends('layouts.main')

@section('title')
app-title
@endsection

@section('sidebar')
this is the side menu
@endsection

@section('content')
	@if($age > 20)
		Hello {{$user_name}} you are {{ $age }} years old
	@else
    	its less than 20
    @endif
@endsection