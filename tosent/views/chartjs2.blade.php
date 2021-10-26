@extends('master')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<div class="container">
<canvas id="myChart" width="400" height="400"></canvas>
<script>
    $(function(){
        //get the pie chart canvas
        var cData = JSON.parse('<?php echo $chart_data; ?>');
        var ctx = $("#myChart");
   
        //pie chart data
        var data = {
          labels: cData.label,
          datasets: [
            {
              label: "ราคาสินค้าทั้งหมด",
              data: cData.data,
              backgroundColor: [
                "#DEB887",
                "#A9A9A9",
                "#DC143C",
                "#F4A460",
                "#2E8B57",
                "#1D7A46",
                "#CDA776",
              ],
              borderColor: [
                "#CDA776",
                "#989898",
                "#CB252B",
                "#E39371",
                "#1D7A46",
                "#F4A460",
                "#CDA776",
              ],
              borderWidth: [1, 1, 1, 1, 1,1,1]
            }
          ]
        };
   
        //options
        var options = {
          responsive: true,
          title: {
            display: true,
            position: "top",
            text: "ราคาสินค้ารวมแต่ละเดือน ปี 2021",
            fontSize: 18,
            fontColor: "#111"
          },
          legend: {
            display: true,
            position: "bottom",
            labels: {
              fontColor: "#333",
              fontSize: 16
            }
          }
        };
   
        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
          type: "bar",
          data: data,
          options: options
        });
   
    });
  </script>
  </div>
@endsection