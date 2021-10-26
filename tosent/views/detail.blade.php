@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">กลับ</a>
       <h1>{{$product['name']}}</h1>
       <h3>{{$product['price']}}฿</h3>
       <br><h4>{{$product['description']}}</h4><br>
       <h4>category: {{$product['category']}}</h4>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-lg btn-info">หยิบใส่ตระกร้า</button>
       </form>
       <br><br>
    </div>
   </div>
</div>
@endsection