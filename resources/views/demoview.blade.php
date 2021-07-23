<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>Demo</title>
	<style>
		.banner{
			height: 250px;
			background-image: url("https://wallpaperaccess.com/full/2396937.jpg");
			background-size: auto;
			margin-bottom: 15px;
		}
		.footer{
			background-color: black;
			text-align: center;
			color: white;
		}
		.footer>p{
			padding-top: 15px;
		}
		.btn-footer{
			background-color: blue;
			border: 3px solid black;
			padding: 15px;
			margin-bottom: 15px;
			color: white;
		}
		a{
			text-decoration: none;
		}
		ul{list-style: none;}
		li{
			float: left;
			margin-right: 15px;
				
		}
		.container>.social>ul>li>a{
			color: gray;
		}
		.icon-social-nework{
			margin-bottom: 55px;
		}
		.final{
			height: 15px;
			background-color: black;
		}

	</style>
</head>
<body>
	<div class="banner" ></div>
	<div class="container">
		<div class="row">		
		@foreach ($dataToShow as $item)
			<div class="col-3">
				<div class="card" style="width: 100%;">
				  <img src="{{$item->img}}" class="card-img-top" alt="img">
				  <div class="card-body">
				  	<p>{{$item->typename}}</p>
				    <h5 class="card-title">{{$item->title}}</h5>
				    <p class="card-text">{{$item->quote}}</p>
				    <a href="#" class="btn btn-outline-info">View more</a>
				  </div>
				</div>
			</div>
		@endforeach

		</div>
		<div class="d-flex justify-content-center mt-5">
		  <a href="showFull" class="btn btn-outline-info ">+MORE</a>
		</div>
	</div>
	<div class="footer mt-3">
		<p>Build a creative website in no time</p>
		<h3>Ready to enjoy Pepper theme?</h3>
		<button class="btn-footer">Purchse now</button>
	</div>
	<div class="container icon-social-nework">
		<div class="social">
			<ul>
				<li><a href=""><i class="fab fa-twitter-square"></i>Twiter</a></li>
				<li><a href=""><i class="fab fa-facebook-f"></i>Facebook</a></li>
				<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
				<li><a href=""><i class="fab fa-instagram"></i>Instagram</a></li>
			</ul>
		</div>
	</div>
	<div class="final"></div>
</body>
</html>