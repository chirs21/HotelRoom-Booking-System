

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href='/hotel-booking/bootstrap.min.css'>
<style>
		body 
		{
			background-image: url('img/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: ARIAL;
        }
	.container-fluid{
		/*text-align: center;*/
		margin-top: 5%;
	}
  .row{
    background-color: rgba(0, 0, 0, 0.7);
  }
	.label{
		color: #00FF00;
	}
	.form-control{
		background-color: orange;
    border: 2px solid black;
	}
	.btn{
		font-weight: bold;
		background-color: orange;
		color: black;
		margin-left: 27%; 
		margin-top: 10px;
    margin-bottom: 10px;
	}
	.ruler{
		border: 0.8px solid white;
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
<body>
	<div class="container-fluid">
	<form action="" method="post" name="room_category">
    
        <div class="row">
        	<div class='col-md-5'></div>
          <div class="col-md-2">
          	<div class="form-group">
          	<label for="room_category" class="label"><b>Room Category</b></label>
          	<input class="form-control" type="text" name="room_category">
          </div>

          	<div class="form-group">
          	<label for="no_of_rooms" class="label"><b>No. of rooms</b></label>
          	<select class="form-control" name="no_of_rooms">
          		<option value="1">1</option>
          		<option value="2">2</option>
          		<option value="3">3</option>
          		<option value="4">4</option>
          		<option value="5">5</option>
          	</select>
          </div>

           <!--  <label for="room_no" class="label"><b>ROOM NO</b></label>
            <input class="form-control" type="text" name="room_no"> -->
            <div class="form-group">
            <label for="beds" class="label"><b>No. of Beds</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="beds">
        	</div>

        	<div class="form-group">
            <label for="facilities" class="label"><b>Facilities</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="facilities">
        	</div>

        	<div class="form-group">
            <label for="price" class="label"><b>Price per night</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="price">
        	</div>

           	<hr class="ruler">
            <input class="btn btn-primary" type="submit" name="save" value="BOOK">
          </div>
          <div class="col-md-5"></div>
        </div>  
  </form>
</div>


<?php
include_once('connection.php');
  if(isset($_POST[ 'save']))
  {
    $room_category=$_POST['room_category'];
    $no_of_rooms=$_POST['no_of_rooms'];
    $beds=$_POST['beds'];
    $facilities=$_POST['facilities'];
    $price=$_POST['price'];
    $available=$no_of_rooms;
    $booked=$no_of_rooms-$available;

    $sql= "INSERT into room_types values('$room_category','$no_of_rooms','$beds','$available','$booked','$price','$facilities')";
    $run=mysqli_query($connection,$sql);
     if($run)
        {
            echo '<script type="text/javascript">
            alert("Room Category added!");
            </script>';
                    echo "
          <script type='text/javascript'>
                window.location.href = 'index.php';
          </script>"; 
        }
        else
        {
          echo '<script type="text/javascript">
            alert("Internal error!");
            </script>';
        }
      die(mysqli_connect_errno());
    }

?>
</body>
</html>