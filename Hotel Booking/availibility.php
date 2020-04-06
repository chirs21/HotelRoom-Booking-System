<!DOCTYPE html>
<html>
<head>
	<title>ONLINE RESERVATION</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>

<style>
	 body {
            background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .well{
        	background: rgba(0, 0, 0, 0.7);
        	height: 200px;
        }
        .row{
        	margin-top: 10%;
        }
        .form-group{
        	margin-left: 15%;
        	margin-top: 5%;
        	margin-bottom: 5%;
        }
        .btn{
        	margin-left: 13%;
        }
            .nav-link:link{
        text-decoration: none;
    }
    .nav-link:visited{
        color: black;
    }
    .container{
        margin-top: 40px;
    }
    .nav-item{
        margin-left: 5px;
        margin-right: 5px;
    }
        .collapse .nav-link {
        color: white;
        opacity: 0.6;
    }
    .collapse .nav-link:hover {
        
        opacity: 1;
    }
       
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }
        label
        {
            color:#ffbb2b;
            font-size: 13px;
            font-weight: 100;
        }
        a:link{
        	text-decoration: none;
        }

    </style>
<body>
    <div class="container">

        <!-- <h1><center><a href="">HOTEL BOOKING</a></center></h1> -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="rooms.php" class="nav-link">Room & Facilities</a></li>
            <li class="nav-item"><a href="availibility.php" class="nav-link">Online Reservation</a></li>
            <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
        </ul>
    </div>
        <ul class="nav navbar-nav ml-auto">
                    <li><a href="http://www.facebook.com"><img src="img/facebook.png"></a></li>
                    <li><a href="http://www.twitter.com"><img src="img/twitter.png"></a></li>                    
                </ul>
    </nav>
</div>

	 <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4 well'>
         <form action="" method="post" name="room_category">
              
              
               <div class="form-group">
                    <label for="checkin"> Check In 	:</label>&nbsp;&nbsp;&nbsp;
                    <input type="date" class="datepicker" name="checkin">

                </div>
               
               <div class="form-group">
                    <label for="checkout">Check Out:</label>&nbsp;&nbsp;
                    <input type="date" class="datepicker" name="checkout">
                </div>
                 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary button" name="submit"><a href="rooms.php">Check Availability</a></button>

            </form>
           </div>
           <div class="col-md-4"></div>
        </div> 
        <?php

         
         ?>
             
</body>
</html>