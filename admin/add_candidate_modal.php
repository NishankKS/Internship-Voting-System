


<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
				 <div class="col-lg-12">
                    <h3 class="page-header">Add Participant</h3>
					
                </div> 
				
				
				
                    
                            
                        <!-- /.panel-heading -->
                        
                           
                                
								<div class="modal-body">
				<form onsubmit='sav()' method = "post" enctype = "multipart/form-data" >	
					<div class="form-group">
						<label>Select Category</label>
						<select class = "form-control" name = "position" required>
						<option selected disabled>Select Candidate Group</option>
						<?php 
											require 'dbcon.php';
											$bool = false;
											$query = $conn->query("SELECT * FROM category ORDER BY category_id DESC");
												 while($row = $query->fetch_array()){
													$category_id=$row['category_id'];
										?>
								
								<option><?php echo $row ['category'];?></option>
								
								<?php } ?>
							</select>
					
                            </div>
							<div class="form-group">
						<label>Name</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter Name" required="true">
					</div>
							<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required> 
                    </div>
						<center><button name = "save" type="submit" class="btn btn-primary">Save Data</button></center>
				</form>  
			</div>
            
                            <!-- /.table-responsive -->
							<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];		
								
					
					$firstname=$_POST['firstname'];
					//$lastname=$_POST['lastname'];
					//$age=$_POST['Age'];
					//$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO participant(category,participant_name,participant_video)values('$position','$firstname','$location')")or die($conn->error);
				}						
			?>	
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <script>
	function sav(){
		alert("Successfully saved");
		window.location='candidate.php';
	}
	</script>

</body>

</html>


