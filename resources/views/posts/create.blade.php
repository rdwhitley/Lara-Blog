@extends('layouts.main')

@section('title')
app-title
@endsection

@section('sidebar')
this is the side menu
@endsection

@section('content')
	<form action='/posts' method='POST'>
	  {{ csrf_field() }}
	  <h1>Create a Post</h1>
	  <hr>
	  <div class="form-group">
	    <label for="Title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Enter Title" name='title'>
	  </div>
	  
	  <div class="form-group">
	    <label for="content">Content</label>
	    <textarea type="" class="form-control" id="content" placeholder="Submit Content" name='content'></textarea>
	  </div>

	  <select class="form-control" name='category_id'>

      @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>        
      @endforeach
    </select>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection