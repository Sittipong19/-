@extends('master')
@section("content")
<div class="container">
@if(Session::has('post_update'))
<span>{{Session::get('post_update')}}</span>
@endif
<form method="post" action="{{route('update.post')}}">
    @csrf
    <div class="form-group">
    <label for="first_name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$post->name}}">
    </div>
    <div class="form-group">
    <label for="last_name">Price</label>
    <input type="text" class="form-control" id="price" name="price" value="{{$post->price}}">
    </div>
    <div class="form-group">
        <label for="last_name">category</label>
        <input type="text" class="form-control" id="category" name="category" value="{{$post->category}}">
        </div>
        <div class="form-group">
            <label for="last_name">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$post->description}}">
            </div>
            <div class="form-group">
                <label for="last_name">gallery</label><br>
                <img class="trending-image" src="{{$post->gallery}}"><br>
                <br><input type="text" class="form-control" id="gallery" name="gallery" value="{{$post->gallery}}">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection