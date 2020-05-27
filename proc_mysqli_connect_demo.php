<?php 
	$con=mysqli_connect('localhost','root','eazy','chaitany_demo');
	if(!$con)
	{
		die('Connection error'.mysqli_connect_error());
	}
		echo 'Connected Successfully !';

	mysqli_close($con);
?>
