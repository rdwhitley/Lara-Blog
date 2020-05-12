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
    <h1>Edit a Post</h1>
    <hr>
    <div class="form-group">
      <label for="Title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name='title' value="{{$post->title}}">
    </div>
    
    <div class="form-group">
      <label for="content">Content</label>
      <textarea type="" class="form-control" id="content" placeholder="Submit Content" name='content' >{{$post->content}}</textarea>
    </div>

    <div class="form-group">
      <label for="content">Content</label>
      <select class="form-control" name='category_id'>

      @foreach($categories as $category)
        @if($category->id == $post->category_id)
          <option value="{{$category->id}} selected">{{$category->name}}</option>
        @else
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endif
      @endforeach
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection