@extends('layouts.app')

@section('content')
 <h1>アンケート結果</h1>
  <canvas id="myPieChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

  <script>
  var ctx = document.getElementById("myPieChart");
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
  
  
   
</body>
</html>

　 
@endsection

