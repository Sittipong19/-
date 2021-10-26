@extends('master')
@section("content")
<div class="container">
@if(Session::has('post_add'))
<span>{{Session::get('post_add')}}</span>
@endif
<form method="post" action="{{route('save.post')}}">
    @csrf
    <div class="form-group">
    <label for="first_name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
    <label for="last_name">Price</label>
    <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
        <label for="last_name">category</label>
        <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="form-group">
            <label for="last_name">description</label>
            <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group">
                <label for="last_name">gallery</label>
                <input type="text" class="form-control" id="gallery" name="gallery">
                </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection