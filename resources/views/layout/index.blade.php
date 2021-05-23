<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
	<title>PAL-Admin</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/static/favicon.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('dist/modules/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/modules/ionicons/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/modules/summernote/summernote-lite.css')}}">
	<link rel="stylesheet" href="{{asset('dist/modules/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/style.css')}}"> 
	<script src="https://cdn.tiny.cloud/1/w9ejevnvqqalf70wb2p0p4dhj8indlbt9nrirgobimx2yf8w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: '#mytextarea'
		});
	</script>	
</head>

<body>
    
	<div id="app">
		<div class="main-wrapper">
			
            @include('layout.navheader')

			@yield('content')

			@include('layout.footer')

		</div>
	</div>
	
	<script src="{{asset('dist/modules/jquery.min.js')}}"></script>
	<script src="{{asset('dist/modules/popper.js')}}"></script>
	<script src="{{asset('dist/modules/tooltip.js')}}"></script>
	<script src="{{asset('dist/modules/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dist/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
	<script src="{{asset('dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js')}}"></script>
	<script src="{{asset('dist/js/sa-functions.js')}}"></script>
	<script src="{{asset('dist/modules/chart.min.js')}}"></script>
	<script src="{{asset('dist/modules/summernote/summernote-lite.js')}}"></script>
	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			datasets: [{
				label: 'Statistics',
				data: [460, 458, 330, 502, 430, 610, 488],
				borderWidth: 2,
				backgroundColor: 'rgb(87,75,144)',
				borderColor: 'rgb(87,75,144)',
				borderWidth: 2.5,
				pointBackgroundColor: '#ffffff',
				pointRadius: 4
			}]
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true,
						stepSize: 150
					}
				}],
				xAxes: [{
					gridLines: {
						display: false
					}
				}]
			},
		}
	});
	</script>
	<script src="{{asset('dist/js/scripts.js')}}"></script>
	<script src="{{asset('dist/js/custom.js')}}"></script>
	<script src="{{asset('dist/js/demo.js')}}"></script>
</body>

</html>