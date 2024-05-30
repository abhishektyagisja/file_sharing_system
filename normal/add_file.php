
<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add File</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span9">
								<form action="save.php" method="POST">

								     <div class="control-group">
											<label>TYPE OF MESSAGE </label>
                                          <div class="controls">
                                            <select name="ftype"  class="">
                                             	<option value ="urgent">URGENT </option>
												                      <option value ="main">MAIN </option>
												                       <option value ="normal"> NORMAL </option>
											
                                            </select>
                                          </div>
                                        </div>

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

										<div class="control-group">
											<label>TYPE MESSAGE </label>
											
                                           <input type="text"  name="message">
										   
										   </div>
											

                                         <button type="submit" class="btn btn-primary">Send</button> 

										 
										 
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
