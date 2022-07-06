
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
				 <div class="col-lg-12">
                    <h3 class="page-header">Add Category</h3>
					
                </div> 
				
				
				
                    
                            
                        <!-- /.panel-heading -->
                        
                           
                                
								<div class="modal-body">
				<form onsubmit="sav()"  method = "post" enctype = "multipart/form-data" >	
					<div class="form-group">
						
					
                            </div>
							<div class="form-group">
						<label>Category Name</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter Category Name" required=>
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
					$category=$_POST['firstname'];					
					
					
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO category(category)values('$category')")or die($conn->error);
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
