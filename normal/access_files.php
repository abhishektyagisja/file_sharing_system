<?php include('header2.php'); ?>
<?php include('../session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <?php include('sidebar_access_files.php'); ?>

            <div class="span9" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							<?php 
							$query = mysqli_query($conn,"select * from file where destination='$user_name' ")or die(mysqli_error());
							$count = mysqli_num_rows($query);
							?>
                                <div class="muted pull-left"><i class="icon-reorder icon-large"></i> File List</div>
                                <div class="muted pull-right">
									Number of Files: <span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									
										<thead>
										  <tr>					
                                      												
												<th>FILE TYPE </th>
												<th>FILE NAME (name-yy-mm-dd-no)</th>
												<th>CREATOR</th>
                                                <th>MESSAGE</th>
												
												
                                                <th>DATE</th>
												<th>FORWARD TO</th>
                                                <th>RETURN</th>
                                                
                                                <th></th>
											
							
										   </tr>
										</thead>
										<tbody>
										
													<?php

													
													$user = mysqli_query($conn,"select * from file where destination='$user_name'")or die(mysqli_error());
													while($row1 = mysqli_fetch_array($user)){
													
													$mytype=$row1['filetype'];
													
													$mysender =$row1['sender'];
													$mydept =$row1['department'];
													$ysender =$row1['destination'];
													$ydept =$row1['dest_department'];
                                                    $dt =$row1['upload_date'];
													$message =$row1['msg'];
                                                    $i =$row1['id'];

												
													?>

                    
												<tr>
												
												<td><?php echo $mytype;?> </td>
												<td><?php echo "NSC"; echo "-"; echo $dt; echo "-"; echo $i;?></td>
												<td><?php echo $mydept; echo" - "; echo $mysender;?></td>
												<!-- <td><?php echo $ydept; echo" - "; echo $ysender;?></td> -->
                                                <td><?php echo $message; ?></td>
                                                <td><?php echo $dt; ?></td>
												<td><a  href="forward.php">Forward</a></td>
                                                <td><a href="delete.php?id=<?php echo $i?>">Return</a></td>
												

											
												<td>
											
											
											
												</td>
												</tr>
												<?php } ?>

												<?php

													
													$user = mysqli_query($conn,"select * from file2 where destination='$user_name'")or die(mysqli_error());
													while($row1 = mysqli_fetch_array($user)){
													
													$mytype=$row1['filetype'];
													
													$mysender =$row1['sender'];
													$mydept =$row1['department'];
													$ysender =$row1['destination'];
													$ydept =$row1['dest_department'];
                                                    $dt =$row1['upload_date'];
													$message =$row1['message'];
                                                    $i =$row1['id'];

												
													?>

                    
												<tr>
												
												<td><?php echo $mytype;?> </td>
												<td><?php echo "NSC"; echo "-"; echo $dt; echo "-"; echo $i;?></td>
												<td><?php echo $mydept; echo" - "; echo $mysender;?></td>
												<!-- <td><?php echo $ydept; echo" - "; echo $ysender;?></td> -->
                                                <td><?php echo $message; ?></td>
                                                <td><?php echo $dt; ?></td>
												<td><a  href="forward.php">Forward</a></td>
                                                <td><a href="delete2.php?id=<?php echo $i?>">Return</a></td>
												

											
												<td>
											
											
											
												</td>
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
						</div>
                    </div>


                </div>

                <?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>