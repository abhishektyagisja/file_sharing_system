<?php include('../connection/dbcon.php'); ?>
<?php include('../session.php');?>
<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emplnumber = $_POST['emplnumber'];
$dept = $_POST['dept'];
$status=$_POST['status'];
$username =$firstname.'.'.$lastname;
$password=12345;

if($status=='administrator'){
    $dept ='';
    $dept_id=0; 
}
else{
if($dept=='computer'){
    $dept_id=1;   
}
if($dept=='science'){
    $dept_id=2;   
}
if($dept=='arts'){
    $dept_id=3;   
}
}



mysqli_query($conn,"insert into staff (username,password,firstname,lastname,emplnumber,status,department,dept_id) values('$username','$password','$firstname','$lastname','$emplnumber','$status','$dept','$dept_id')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_name','Registered new $status user - $username  ($region) Region')")or die(mysqli_error());

?>