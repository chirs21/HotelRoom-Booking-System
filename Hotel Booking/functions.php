<?php
    include "connection.php";
        class user
        {
            public $db;
            public function __construct()
            {
                $this->db=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,'hotel');
                if(mysqli_connect_errno())
                {
                    echo "Error: Could not connect to database.";
                    exit;
                }
            } 

            public function booknow($checkin, $checkout, $name, $phone,$roomname,$roomno)
            {
                    
                    $sql="SELECT * FROM booking WHERE room_category='$roomname'"; 

                    $check= mysqli_query($this->db,$sql)  or die(mysqli_connect_errno()."Data herecannot inserted");;
                 
                    if(mysqli_num_rows($check) > 0)
                    {
                        $row = mysqli_fetch_array($check);
                        $roomno=$row['room_no'];
                        
                        $sql2="UPDATE booking  SET check_in='$checkin', check_out='$checkout', name='$name', phone='$phone', status='true' WHERE room_no=$roomno";
                         $send=mysqli_query($this->db,$sql2);
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
                        $result = "No Room Is Available";
                    }
                    
                    
                
                    return $result;
                

            }
            

        }