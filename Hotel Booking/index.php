<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style>
	body{
		background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
	}
	h1{
		font-family: TIMES NEW ROMAN;
		font-weight: bold;
	}
	a:link{
		text-decoration: none;
	}
	a:visited{
		color: black;
	}
	.container{
		margin-top: 40px;
	}
	.nav-item{
		margin-left: 5px;
		margin-right: 5px;
	}
		.collapse a {
		color: white;
		opacity: 0.6;
	}
	.collapse a:hover {
		
		opacity: 1;
	}
	.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
            }
            @-webkit-keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}
</style>
<body>
	<div class="container">

		<h1><center><a href="">HOTEL BOOKING</a></center></h1>
	<nav class="navbar navbar-expand-lg bg-dark">
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="rooms.php" class="nav-link">Room & Facilities</a></li>
			<li class="nav-item"><a href="availibility.php" class="nav-link">Online Reservation</a></li>
			<li><a href="admin.php" class="nav-link">Admin</a></li>
		</ul>
	</div>
		<ul class="nav navbar-nav ml-auto">
                    <li><a href="http://www.facebook.com"><img src="img/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="img/twitter.png"></a></li>                    
                </ul>
	</nav>
</div>
 <div class="container">
 	<div class="jumbotron">
        <div class="slideshow-container">
            <div class="mySlides fade"><img src="img/1.jpg" style="width:100%; height:450px;"></div>
            <div class="mySlides fade"><img src="img/2.jpg" style="width:100%; height:450px;"></div>
            <div class="mySlides fade"><img src="img/3.jpg" style="width:100%; height:450px;"></div>
            <div class="mySlides fade"><img src="img/4.jpg" style="width:100%; height:450px;"></div>
            <div class="mySlides fade"><img src="img/5.jpg" style="width:100%; height:450px;"></div>
            <div class="mySlides fade"><img src="img/6.jpg" style="width:100%; height:450px;"></div>
        </div>    
        </div>
    </div>

<script src="slide.js"></script>
</body>
</html>