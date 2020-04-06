


<!DOCTYPE html>
<html>
<head>
	<title>ADD MANAGER</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style type="text/css">
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
		border: 2px solid black;
		font-weight: bold;
		background-color: orange;
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
<body>
<div class="container-fluid">
	<form action="add_manager.php" method="post" name="room_category">
    
        <div class="row">
        	<div class='col-md-5'></div>
          <div class="col-md-2">

           <!--  <label for="room_no" class="label"><b>ROOM NO</b></label>
            <input class="form-control" type="text" name="room_no"> -->
            <!-- <div class="form-group">
            <label for="id" class="label"><b>User ID</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="id">
        	</div>
 -->
            <div class="form-group">
            <label for="username" class="label"><b>User Name</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="username" required>
        	</div>

        	<div class="form-group">
            <label for="password" class="label"><b>Password</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="password" name="password" required>
        	</div>

        	<div class="form-group">
            <label for="name" class="label"><b>Full Name</b></label>&nbsp;&nbsp;&nbsp;
            <input class="form-control" type="text" name="name" required>
        	</div>

        	<hr class="ruler">
            <input class="btn btn-primary" type="submit" name="save" value="ADD">

          <div class="col-md-5"></div>
        </div>  
  </form>
</div>
<?php
include_once('connection.php');
	if(isset($_POST['save']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		// $id=$_POST['id'];
		$sql1 = "SELECT * from admin where Uname='$username'";
		$run1 = mysqli_query($connection,$sql1);
		$count_row=$run1->num_rows;
		if($count_row==0)
		{	
		$sql= "INSERT into admin set Uname='$username', Upass='$password', Full_name='$name'";
		$run=mysqli_query($connection,$sql);
		 // if($run)
   //          {
   //              $result="Manager entry added successfully";
   //          }  
   //          else
   //          {
   //          	$result="Internal Error!";
   //          }
        if($run){
            echo '<script type="text/javascript">
            alert("Manager entry added successfully");
            </script>';
                    echo "
					<script type='text/javascript'>
    						window.location.href = 'admin.php';
					</script>"; 
    	}
    	else
    	{
    		  echo '<script type="text/javascript">
            alert("Internal Error!");
            </script>';

    	}
    	die(mysqli_connect_errno());
    }
    else
    {
    	 echo '<script type="text/javascript">
            alert("Regsitration failed! Username already exists!");
            </script>';
    }
}

?>
<script type="text/javascript"></script>
</body>
</html>