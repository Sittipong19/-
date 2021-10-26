@extends('master')
@section("content")
<center>
    <a href="{{route('post.add')}}" class="btn btn-lg btn-success" role="button">เพิ่มสินค้าใหม่</a>
</center><br>
    <div class="container">
        @if(Session::has('post_update'))
        <span>{{Session::get('post_update')}}</span>@endif
<table class="table table-bordered table-striped table-hover">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th>Image Link</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>

                <td>
                    {{ $post->name}}
                </td>
                <td>
                    {{ $post->price}}
                </td>    
                <td>
                    {{ $post->category}}
                </td>     
                <td>
                    {{ $post->description}}
                </td>       
                <td style="max-width:200px; word-wrap:break-word;">
                    {{ $post->gallery}}
                </td>           
                <td>
                    <a href="/edit-post/{{$post->id}}" class="btn btn-info"><i class="fa fa-pencil"></i>แก้ไข</a>
                    <a href="/delete-post/{{$post->id}}" class="btn btn-danger btn-delete">🗑️ ลบ</a>
                </td>
            </tr>    
            @endforeach
        </tbody>
</table>
</div>
@endsection