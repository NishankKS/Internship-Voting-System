<?php
	require_once 'dbcon.php';
	$candidate_id=$_GET['participant_id'];
	$conn->query("DELETE from participant where participant_id='$candidate_id'") or die($conn->error);
	header('location:candidate.php');
?>