 <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                      <li class="active"> <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> </li>
					
					
                        <li>
						<a href="uploaded_files.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Uploaded Files (
						<?php 
					$received = mysqli_query($conn,"SELECT * FROM file WHERE sender = '$user_name'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';
							?>  )</a>
						</li>

						

                        <li>
						<a href="access_files.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Received Files (
						<?php 
					$received = mysqli_query($conn,"SELECT * FROM file WHERE destination = '$user_name'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';
							?>  )</a>
						</li>

						<li>
						<a href="forward_files.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Forwarded Files (
						<?php 
					$received = mysqli_query($conn,"SELECT * FROM file2 WHERE sender = '$user_name'")or die(mysqli_error());
					$receiveda = mysqli_num_rows($received);
					echo '<font color="Red">'  . $receiveda .'</font>';
							?>  )</a>
						</li>
						
						
						<li >
                            <a href="file.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Add File</a>
                        </li>
						

						
                    </ul>
                </div>