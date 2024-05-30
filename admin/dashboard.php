<?php include('refresh.php'); ?>
<?php  include('header.php'); ?>
<?php  include('../session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span8" id="">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="row-fluid" class="">
                            <div class="navbar navbar-inner block-header">
                            <?php
											
                            $categories = mysqli_query($conn, "Select * from staff where username='$user_name'");
											while($c = mysqli_fetch_array($categories)) {
                                                ?>
                                <div class="high">Welcome , <?php echo $c['firstname']; echo" "; echo $c['lastname'];  }?> </div>
                                           
                            </div>
                           
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>