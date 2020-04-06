<!DOCTYPE html>
<html>
<head>
	<title>BOOKINGS</title>
</head>

<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style>
	body {
            background-image: url('img/2.jpg');
            /*opacity: 0.5;*/
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 100%;
            height: auto;
            background-size: cover;
            /*object-fit: contain;*/
        }
	
	.container-fluid{
		/*border: 1px solid black;*/
		margin-top: 80px;
		/*width: 100%;*/

	}
	.well{
		background-color: rgba(0, 0, 0, 0.7);
		margin-right: 20px;
		border: 2px solid black;
		float: left;
		margin-bottom: 20px;
	}
	/*.heading{
		text-align: center;
		border: 1px solid black;
		height: 50px;	
		padding-top: 2%;*/


	}
	.box{
		/*border: 1px solid black;*/
		width: 700px;
		height: 305px;
		padding-top: 5px;
		margin-left: 2%;
		float: left;
	
		
	}
	/*a:link{
		text-decoration: none;
	}
    .b:link{
        color: yellow;
    }
	.b:visited{
		color: #FFFF00;
	}
	.b:hover{
		color: indigo;
		font-size: 35px;
	}*/
	   
	 h5{
            color: orange;
            font-family: ARIAL;
            /*font-weight: bold;*/
            text-shadow: 2px 2px black;
        }
        .category{
        	color: blue;
        }
        /*h6
        {
            color: white;
            font-weight: bold;
            font-family: monospace;
            font-size: 18px;
        }*/
        
        /*.a:visited{
        	color:	white;
        }
        .a:hover{
        	font-size: 20px;
        	color: blue;
        }*/
</style>
<body>
	 <div class= "container-fluid">
    <?php
    include('connection.php');
    $sql="SELECT * FROM booking where status='NOT AVAILABLE'";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo '
				        <div class="box">
                            <div class="col-md-5 well">
                            	<h5>Room No: '.$row["room_no"].'</h5>
                                <h5 class="category">Room Type: '.$row["room_category"].'</h5>
                                <h5>Check In: '.$row["check_in"].'</h5>
                                <h5>Check Out: '.$row["check_out"].'</h5>
                                <h5>Name: '.$row["name"].'</h5>
                                <h5>Phone No: '.$row["phone"].'</h5>
                            </div>
                        </div>
                                ';
                }
            }
        }
    ?>
    </div>


</body>
</html>