<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style>
	.row{
		/*border: 1px solid black;*/
		height: 300px;
		margin-top: 10%;
	}
	.form-group{
		width: 250px;
		padding-left: 10px;
		margin-left: 80px;
	}
	.btn{
		width: 120px;
		margin-left: 150px;
		margin-top: 20px;
	}
	#error{
		color: red;
		margin-left: 100px;
		font-size: 12px;
	}
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
	label{
		color: #00FF00;
		font-weight: bold;
		font-size: 20px;
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
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action=" " method="post" name='login'>
			<div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" value="admin" required>
            </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" value="12345" required>
                </div>
                <p id="error"></p>
                <button type="submit" name="submit" value="Login" onclick="retrun(submitlogin());" class="btn btn-lg btn-primary btn-block">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>

<?php
		include('connection.php');


		if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="SELECT uid from admin WHERE uname='$username' and upass='$password'";
                $result=mysqli_query($connection,$sql);
                $user_data=mysqli_fetch_array($result);
                $count_row=$result->num_rows;
                if($count_row==1) 
                {
                	$_SESSION['login']=1;
                	$_SESSION['uid']=$user_data['uid'];
                 echo  "<script>location='admin.php'</script>"; 
                } 
                else{

                	$_SESSION['login']=0;

                	?>
                 <script type="text/javascript">
                 	document.getElementById("error").innerHTML ="Wrong username or password";
                 </script>
                 <?php
             	}
             }

                 ?>

</body>
</html>