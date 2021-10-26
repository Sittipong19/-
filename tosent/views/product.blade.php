@extends('master')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
          <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text" style="right:20px">
              <h2>{{$item['name']}}</h2>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div style="clear: both; display: block; height: 90px"></div>
      <center><h2>ยินดีต้อนรับสู่ร้านผลไม้ออนไลน์ Fruity!</h2></center>
      
      <div class="trending-wrapper">
        <div class="alert alert-info" role="alert">
          <strong>ยินดีต้อนรับสู่ร้าน Fruity</strong> เรามีผลไม้นำเข้าคุณภาพเยี่ยม จัดส่งผลไม้ถึงบ้านคุณหลากหลายรายการ ทั้งผลไม้ premium ผลไม้ตัดแต่งพร้อมทาน กระเช้าผลไม้ ผักสดออนไลน์ บริการเดลิเวอรี่ จัดส่งความสด สะดวก สะอาด และที่สำคัญอร่อยมาก!! ได้แล้ววันนี้
        </div>
        <div style="clear: both; display: block; height: 90px"></div>
        <h3>สินค้าต่างๆ</h3>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="trending-itemname">
            <h3>{{$item['name']}}</h3>
            <h5 style="-webkit-text-fill-color: brown">{{$item['price']}} ฿</h5>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection