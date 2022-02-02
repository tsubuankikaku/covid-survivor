@extends('layouts.app')

@section('content')
<html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LaravelとGoogle円グラフ</title>

    <!-- Scripts -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>

    
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
			title: '好きなお団子統計',
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

<div class="container">
随時アンケート数拡大中です。
</div>

<div class="container py-3">
	<div class="form-group box2  col-12 col-md-10 col-lg-10" style="width:800px;">
		<form method="post" action="{{route('job.answer')}}">
		@csrf
		@method('put')
			<div class="form-check">
				<input name="job" value="会社員" type="radio">
				<label class="form-check-label" for="会社員">会社員</label>
			</div>
			<div class="form-check">
				<input name="job" value="サービス業" type="radio">
				<label class="form-check-label" for="サービス業">サービス業</label>
			</div>
			<div class="form-check">
				<input name="job" value="医療従事者" type="radio">
				<label class="form-check-label" for="医療従事者">医療従事者</label>
			</div>
			<div class="form-check">
				<input name="job" value="学生" type="radio">
				<label class="form-check-label" for="学生">学生</label>
			</div>
			<div class="form-check">
				<input name="job" value="主婦" type="radio">
				<label class="form-check-label" for="主婦">主婦</label>
			</div>
			<div class="form-check">
				<input name="job" value="教育関係" type="radio">
				<label class="form-check-label" for="教育関係">教育関係</label>
			</div>
			<div class="form-check">
				<input name="job" value="無職" type="radio">
				<label class="form-check-label" for="無職">無職</label>
			</div>
			<div class="text-right">
			<button type=”submit” class="btn btn-danger btn-info">回答する</button>
		</div>
		</form>
	</div>

	<div id="chart_div" style="height:500px;width:800px;"></div>

</div>

</body>
</html>

@endsection