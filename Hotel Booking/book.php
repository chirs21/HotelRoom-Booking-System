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
            font-family: COMIC SANS MS;
	}
	.container-fluid{
		
		margin-top: 5%;
	}
	.label{
		color: cyan;
	}
	.form-control{
		background-color: palegreen;
	}
	.btn{
		font-weight: bold;
		background-color: palegreen;
		color: black;
		margin-left: 27%; 
		margin-top: 10px;
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
    $checkin=$_POST['check_in']; 
    $checkout=$_POST['check_out']; 
    $name=$_POST['name']; 
    $phone=$_POST['phone']; 
  

    	 $sql="SELECT * from booking where room_category='$roomname' AND ((check_in < '$checkin' AND check_out < '$checkin') OR (check_in > '$checkout' AND check_out > '$checkout') OR (check_in > '$checkin' AND check_out < '$checkout'))"; 

                    $check= mysqli_query($connection,$sql)  or die(mysqli_connect_errno()."Data herecannot inserted");;
                 
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $roomno=$row['room_no'];
                        
                        $sql2="UPDATE booking  SET check_in='$checkin', check_out='$checkout', name='$name', phone='$phone', status='NOT AVAILABLE' WHERE room_no=$roomno";
                         $send=mysqli_query($connection,$sql2);
                        if($send)
                        {
                            $result="Your Room has been booked!!";
                        }   
                        else
                        {
                            $result="Sorry, Internel Error";
                        }
                    }
                    else                       
                    {
                        $result = "No Room Is Available for the Selected Category";
                    }

        if($result)
        {
            echo '<div class="alert alert-success">
    <strong>'.$result.'</strong>
  </div>
  <a href="index.php" class="end"><center>Back to home</center></a>';
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
		  
            <div class="form-group">
            <label for="check_in" class="label"><b>CHECK IN</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="date" name="check_in">
        	</div>

        	<div class="form-group">
            <label for="check_out" class="label"><b>CHECK OUT</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="date" name="check_out">
        	</div>

        	<div class="form-group">
            <label for="name" class="label"><b>NAME</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="name">
        	</div>

        	<div class="form-group">
            <label for="phone" class="label"><b>PHONE NO</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="phone">
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
