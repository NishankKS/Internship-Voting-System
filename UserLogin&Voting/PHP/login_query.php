<?php
	require_once 'dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['phone'];
		//$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE ph_no = '$idno'") ;
		// $row = $result->fetch_array();
		// $voted = $conn->query("SELECT * FROM `voters` WHERE Contact_Number = '$idno' && `password` = '".md5($password)."' && `status` = 'Voted'")->num_rows;
		// $numberOfRows = $result->num_rows;				
		
		
		// if ($numberOfRows > 0){
		// 	session_start();
		// 	$_SESSION['voters_id'] = $row['voters_id'];
        //     header('location:vote1.php');

		// }
		

		if($result == 1){
            ?>
			<script type="text/javascript">
			window.location='otp.php';
			</script>
			<?php
			
		}else{
			?>
			<script type="text/javascript">
			alert('Your account is not registered or Sorry You Already Voted')
			</script>
			<?php
		}
	
	}
?>