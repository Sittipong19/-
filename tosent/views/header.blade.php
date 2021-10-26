<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">🍒Fruity Shop🍒</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          @if(Session::has('user'))
          <li><a href="/myorders">🍎Orders</a></li>
          <li><a href="/chartjs">💹กราฟ1</a></li>
          <li><a href="/chartjs2">💹กราฟ2</a></li>
          <li><a href="/post-list">🛠️จัดการข้อมูลสินค้า</a></li>
          @endif
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="🔎ค้นหาสินค้า เช่น ทุเรียน มังคุด ฯลฯ">
          </div>
          <button type="submit" class="btn btn-lg btn-success">🔍Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation" class="active"><a href="/cartlist">🛒ตะกร้าสินค้า <span class="badge">{{$total}}</span></a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">ออกจากระบบ</a></li>
              <li><a href="/post-list">จัดการหลังบ้าน</a></li>
            </ul>
          </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>