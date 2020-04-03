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
            object-fit: contain;
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
        	margin-left: 14%;
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