@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
              <tr>
                <td>จำนวน</td>
              <td>บาท {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>บาท 0</td>
              </tr>
              <tr>
                <td>การจัดส่ง </td>
                <td>บาท 10</td>
              </tr>
              <tr>
                <td>ยอดรวม</td>
              <td>บาท {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">ชำระเงิน</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>โอนผ่านธนาคาร</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>ชำระเงินปลายทาง</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">ซื้อเลย!</button>
              </form>
          </div>
     </div>
</div>
@endsection 