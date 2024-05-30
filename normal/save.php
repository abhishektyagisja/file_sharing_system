<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php');?>
<?php
error_reporting(0);               

                $ftype=$_POST['ftype'];
                $sender=$row['username'];
                $department=$row['department'];

                $destination=$_POST['dest'];
                // $department_id=$_POST['select'];
                $message=$_POST['message'];
              

                $user = mysqli_query($conn,"select * from staff where username='$destination'")or die(mysqli_error());
					while($row = mysqli_fetch_array($user)){
                        $dest_department=$row['department'];
                    }

                
                    $sql = "INSERT INTO file ( filetype,sender ,department,destination ,dest_department,msg) VALUES ( '$ftype', '$sender','$department' ,'$destination',' $dest_department','$message')";
                  
                $data=mysqli_query($conn,$sql);

                if($data){
                    echo "MESSAGE SENT";
                }
                else{
                    echo "MESSAGE SENT UNSUCCESSFUL";
                }

?>