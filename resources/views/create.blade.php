@extends('layouts.app')
@section('content')
<h1>Create New To do</h1>
<form method = "POST" action="/todo">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name= "title" id="title" placeholder="Your title here..." value = "{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control"  name="content" id="content" placeholder="Your content here..." value = "{{ old('content') }}">
    </div>
    <div class="form-group">
        <label for="due">Due on</label>
        <input type="text" class="form-control"  name= "due" id="due" placeholder="This to do is due on ?" value = "{{ old('due') }}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection