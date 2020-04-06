<html>
<head>
	<title>BOOKING</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles.css"> 
<style>
	body
	{
		background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: ARIAL;
	}
  .row{
    background-color: rgba(0, 0, 0, 0.7);
  }
	.container-fluid{
		/*text-align: center;*/
		margin-top: 5%;
	}
	.label{
		color: #00FF00;
	}
	.form-control{
		background-color: #FFBF00;
    border: 2px solid black;
	}
	.btn{
		font-weight: bold;
		background-color: #FFBF00;
		color: black;
		margin-left: 27%; 
		margin-top: 10px;
    margin-bottom: 10px;
	}
	.ruler{
		display: block;
		border-width: 1px;
		color: blue;
		border-style: inset;
	}
	.alert{
		text-align: center;
	}
	.end:link{
		text-decoration: none;
	}
	.end:visited{
		color: black;
		text-align: center;
	}
</style>
	<?php 
	include_once('connection.php');
    if(isset($_POST['save'])) 
    {
    $roomname=$_POST['room_category']; 
    // $roomno=$_POST['room_no']; 
    $checkin=$_POST['check_in']; 
    $checkout=$_POST['check_out']; 
    $name=$_POST['name']; 
    $phone=$_POST['phone']; 
  

    	 $sql="SELECT * from booking where room_category='$roomname' AND ((check_in < '$checkin' AND check_out < '$checkin') OR (check_in > '$checkout' AND check_out > '$checkout') OR (check_in > '$checkin' AND check_out < '$checkout'))"; 

                    $check= mysqli_query($connection,$sql)  or die(mysqli_connect_errno()."Data here cannot inserted");;
                 
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $roomno=$row['room_no'];
                        
                        $sql2="UPDATE booking  SET check_in='$checkin', check_out='$checkout', name='$name', phone='$phone', status='NOT AVAILABLE' WHERE room_no=$roomno";
                         $send=mysqli_query($connection,$sql2);

        // extract($_POST); 
        // $result=$user->booknow($checkin, $checkout, $name, $phone,$roomname,$roomno);
        if($send)
        {
            echo '<script type="text/javascript">
            alert("Your room has been booked!");
            </script>';
                    echo "
          <script type='text/javascript'>
                window.location.href = 'index.php';
          </script>"; 
    	}
      else
      {
        echo '<script type="text/javascript">
            alert("Internal Error!");
            </script>';

      }
    }
    else{
       echo '<script type="text/javascript">
            alert("No rooms are available for the selected category!");
            </script>';
          }
    	die(mysqli_connect_errno());
    }
	?>

	


</style>
<body>
	<div class="container-fluid">
	<form action="book.php" method="post" name="room_category">
    
        <div class="row">
        	<div class='col-md-5'></div>
          <div class="col-md-2">
          	<div class="form-group">
          	<label for="room_category" class="label"><b>ROOM CATEGORY</b></label>
          	<select class="form-control" name="room_category">
          		<option value="SINGLE">SINGLE</option>
          		<option value="DOUBLE">DOUBLE</option>
          		<option value="DELUXE">DELUXE</option>
          		<option value="SUPER DELUXE">SUPER DELUXE</option>
          	</select>

          </div>

           <!--  <label for="room_no" class="label"><b>ROOM NO</b></label>
            <input class="form-control" type="text" name="room_no"> -->
            <div class="form-group">
            <label for="check_in" class="label"><b>CHECK IN</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="date" name="check_in" required>
        	</div>

        	<div class="form-group">
            <label for="check_out" class="label"><b>CHECK OUT</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="date" name="check_out" required>
        	</div>

        	<div class="form-group">
            <label for="name" class="label"><b>NAME</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="name" required>
        	</div>

        	<div class="form-group">
            <label for="phone" class="label"><b>PHONE NO</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="phone" required>
        	</div>

           	<hr class="ruler">
            <input class="btn btn-primary" type="submit" name="save" value="BOOK">
          </div>
          <div class="col-md-5"></div>
        </div>  
  </form>
</div>

</body>
</html>