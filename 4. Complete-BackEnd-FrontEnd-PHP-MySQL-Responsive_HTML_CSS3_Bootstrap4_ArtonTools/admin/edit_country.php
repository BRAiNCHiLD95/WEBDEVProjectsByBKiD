<?php 
	require_once('config.php'); 
	$country_id=$_POST['id'];
	$select="SELECT * FROM `country_data` where id=$country_id";
	$query=mysqli_query($conn,$select);
	$res=mysqli_fetch_assoc($query);
	echo json_encode($res);
?>