<?php
	include("dbcon.php");
	session_start();
	session_destroy();
		$conn->query("INSERT INTO participant(category_id,participant_id) VALUES('$_SESSION[pm_id]', '$_SESSION[voter_id]')") or die($conn->error);
		//$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);
		header("location:index.php");
		
?> 