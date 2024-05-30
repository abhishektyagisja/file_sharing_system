<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php');?>
<?php
error_reporting(0);               

$user1 = mysqli_query($conn,"select * from file where destination='$user_name'")or die(mysqli_error());
while($row1= mysqli_fetch_array($user1)){
    $ftype=$row1['filetype'];
    $sender=$row1['destination'];
    $department=$row1['dest_department'];
    $destination=$_POST['dest'];
    
    $message=$row1['msg'];
}

$user2 = mysqli_query($conn,"select * from staff where username='$destination'")or die(mysqli_error());
while($row2 = mysqli_fetch_array($user2)){
    $dest_department=$row2['department'];
}

                
                

                
                
                    $sqli = "INSERT INTO file2 ( filetype,sender ,department,destination ,dest_department,message) VALUES ( '$ftype', '$sender','$department' ,'$destination',' $dest_department','$message')";
                  
                $data=mysqli_query($conn,$sqli);

                if($data){
                    echo "FORWARD SUCCESSFUL";
                }
                else{
                    echo "FORWARD UNSUCCESSFUL";
                }

?>