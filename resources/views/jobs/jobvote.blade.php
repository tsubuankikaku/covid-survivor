@extends('layouts.app')

 @section('content')


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <title>アンケート</title>
    
    <h1>アンケート</h1>
    <p>※今後アンケートコンテンツを増やす予定です。</p>

</head>
<script>
	google.charts.load('current', {packages: ['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart(){
		var data=google.visualization.arrayToDataTable([
			['job name', 'number'],
				@php
					foreach($jobs as $job){
						echo "['".$job->job."', ".$job->number."],";
					}
				@endphp
		]);
		var options ={
			title: '職業',
			is3D: true,
			// ラベル不要なとき
			// legend: 'none',
			// パイの中にラベルをつける
			// pieSliceText: 'label',
			// パイの中に数字と項目を両方入れる
			// legend: {
      		// position: 'labeled'
    		// },
			// ラベルを左側につける
			// legend: {
      		// position: 'left'
    		// },
			chartArea:{
    			width: '70%',
    			height: '70%',
				alignment: 'center',
			}
		};
		var chart_div = document.getElementById('chart_div');
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
</script>	

<body> 



<div class="container py-3">
	<div class="form-group box2  col-12 col-md-10 col-lg-10" style="width:800px;">
		<form method="post" action="{{route('job.vote')}}">
		@csrf
		@method('post')
			<div class="form-check">
				<input name="job" value="サービス業" type="radio">
				<label class="form-check-label" for="サービス業">サービス業</label>
			</div>

			<div class="form-check">
				<input name="job" value="医療関係者" type="radio">
				<label class="form-check-label" for="医療関係者">医療関係者</label>
			</div>

			<div class="form-check">
				<input name="job" value="学生" type="radio">
				<label class="form-check-label" for="学生">学生</label>
			</div>

			<div class="form-check">
				<input name="job" value="教育関係者" type="radio">
				<label class="form-check-label" for="教育関係者">教育関係者</label>
			</div>

			<div class="text-right">
				<button type=”submit” class="btn btn-danger btn-primary">回答</button>
			</div>
			
		</form>
	</div>

	<div id="chart_div" style="height:500px;width:800px;"></div>

</div>

</body>
</html>


@endsection