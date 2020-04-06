 <?php
 session_start();
// $user=new User();
// $uid=$_SESSION[ 'uid']; 
if($_SESSION['login']==0) 
{ 
    header("location:login.php"); 
} 
if(isset($_GET['q'])) 
{ 
	$_SESSION['login']=0;
    session_destroy();
 header("location:index.php"); 
} 
?> 

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
	.nav:visited{
		color: black;
	}
	.container{
		margin-top: 20px;
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
	.well{
		background-color: rgba(0, 0, 0, 0.7);
		margin-left: 10px;
	}
	h4{
		color: orange;
		margin-left: 20px;
		margin-top: 10px;
	}
	.a a{
		list-style: none;
		color: white;
		margin-left: 20px;
	}
	ul{
		list-style: none;
	}
	hr{
		border: 0.5px solid white;
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
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="rooms.php" class="nav-link">Room & Facilities</a></li>
			<li class="nav-item"><a href="availibility.php" class="nav-link">Online Reservation</a></li>
			<li class="active"><a href="admin.php" class="nav-link">Admin</a></li>
		</ul>
	</div>
	<ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="admin.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
	
	</nav>
</div>
<br>
<br>
<div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Room Category</h4>
                <hr>
                <ul>
                    <li class="a"><a href="add_room.php">Add Room Category</a></li>
                    <li class="a"><a href="rooms.php">Show All Room Category</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br>
        <br>
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Bookings</h4>
                <hr>
                <ul>
                    <li class="a"><a href="book.php">Book Now</a></li>
                    <li class="a"><a href="show_bookings.php">Show All Bookings</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>
        <br><br>
         <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h4>Manager</h4>
                <hr>
                <ul>
                    <li class="a"><a href="add_manager.php">Add Manager</a></li>
                </ul>
            </div>
            <div class="col-md-3"></div>
        </div>
 </body>
</html>
