<!DOCTYPE html>
<html>
<head>
	<title>ROOMS</title>
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
        margin-left: 15%;
		/*width: 100%;*/

	}
	.well{
		margin-right: 200px;
        margin-bottom: 50px;
        background-color: rgba(0, 0, 0, 0.7);
        padding-top: 10px;
        padding-left: 20px;
        width: 350px;
        height: 250px;
        float: left;
	}
	.heading{
		text-align: center;
		/*border: 1px solid black;*/
		height: 50px;	
		padding-top: 2%;


	}
	.box{
		border: 1px solid black;
		width: 900px;
		height: 350px;
		padding-top: 5px;
		margin-left: 2%;
/*  */
	}
	a:link{
		text-decoration: none;
	}
    .b:link{
        color: yellow;
    }
	.b:visited{
		color: yellow;
	}
	.b:hover{
		color: indigo;
		font-size: 35px;
	}
	   
	 h2{
            /*color: black;*/
            font-family: LUCIDA CONSOLE;
            font-weight: bold;
            text-shadow: 2px 2px black;
        }
        h6
        {
            /*color: orange;*/
            font-weight: bold;
            font-family: monospace;
            font-size: 18px;
        }
        .a:link{
            color: orange;
        }
        .a:visited{
        	color: orange;
        }
        .a:hover{
        	font-size: 20px;
        	color: blue;
        
        }
</style>

<body>
    <div class= "container-fluid">
    <?php
    include('connection.php');
    $sql="SELECT * FROM room_types";
        $result = mysqli_query($connection, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo '
				        
                            <div class="col-md-5 well">
                                <h2><a href="book.php" class="b">'.$row["room_category"].'</a></h5><hr>
                                <h6><a href="" class="a">No. of beds: '.$row["beds"].'</a></h6>
                                <h6><a href="" class="a">Available Rooms:'.$row["available"].'</a></h6>
                                <h6><a href="" class="a">Facilities:'.$row["facilities"].'</a></h6>
                                <h6><a href="" class="a">Price:'.$row["price"].'INR/night</a></h6>
                            </div>
                        
                                ';
                }
            }
        }  
    ?>
    </div>

</body>
</html>