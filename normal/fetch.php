<?php
  include('../connection/dbcon.php');
  $id = $_POST['id'];
  $sql = "SELECT * FROM staff WHERE dept_id= $id ";
  $result = mysqli_query($conn,$sql);

$out='';
  while($row = mysqli_fetch_assoc($result)) 
  {   
     $out .=  '<option>'.$row['username'].'</option>'; 
  }
   echo $out;
  
    ?>
