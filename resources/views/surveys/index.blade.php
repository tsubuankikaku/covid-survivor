@extends('layouts.app')

@section('content')
<div class = "text-center">
 <h1>アンケート結果</h1>
 </div>
  <canvas id="JobChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
  var ctx = document.getElementById("JobChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["サービス業", "医療関係者", "無職", "学生"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [38, 31, 21, 10]
      }]
    },
    options: {
      title: {
        display: true,
        text: '職業'
      }
    }
  });
  </script>
  
   <canvas id="RouteChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
  var ctx = document.getElementById("RouteChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["職場", "家庭内", "不明", "会食"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF"
          ],
          data: [38, 31, 21, 10]
      }]
    },
    options: {
      title: {
        display: true,
        text: '感染経路'
      }
    }
  });
  </script>
  
  
  
   
</body>
</html>

　 
@endsection