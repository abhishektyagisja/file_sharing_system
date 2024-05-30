

<?php include('header2.php'); ?>
<?php include('../session.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
            <a href="access_files.php" class="btn btn-primary">Back</a> 
            </div>
				<div class="span3" id="addfile">
				
<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Forward To</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span9">
								<form action="save2.php" method="POST">


										<div class="control-group">
											<label>SELECT DEPARTMENT </label>
                                          <div class="controls">
                                            <select name="select"  class=""  id="selectID">
											<?php
											include ('dbconnection.php');
											$categories = mysqli_query($conn, "Select * from depart");
											while($c = mysqli_fetch_array($categories)) {
												?>
											<option value="<?php echo $c['id']; ?>"><?php echo $c['dept']; ?></option>
											<?php  }  ?>
											
                                            </select>
                                          </div>
                                        </div> 

										

										<div class="control-group">
											 <label>STAFF NAME:</label>
											
											 <div class="controls">
                          <select name="dest"  class="" id="show" >
                                       
	                                      </select>
											 </div>


										
										</div>

										
											

                                         <button type="submit" class="btn btn-primary">Forward</button> 

										 
										 
                                </form>
								</div>
                            </div>
                        </div>
                    </div>


<script>
  $(document).ready(function(){
     $('#selectID').change(function(){
      var Stdid = $('#selectID').val(); 

      $.ajax({
        type: 'POST',
        url: 'fetch.php',
        data: {id:Stdid},  
        success: function(data)  
         {
            $('#show').html(data);
         }
        });
     });
  });
</script> 

   			
				</div>
				
               
						</div>
                  
						<?php include('footer.php'); ?>
        </div>
			
		<?php include('script.php'); ?>
    </body>
	

</html>




