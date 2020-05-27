<?php 
	/*
		Observation : Sometimes, query is executed but records not affected.
	*/
	try
	{
	$ip='localhost';
	$username='root';
	$password='eazy';
	$db='chaitany_demo';
	
	$con=mysqli_connect($ip,$username,$password,$db);

	if(!$con)
	{
		die("Could not connect to the database".mysqli_connect_error());
	}
	$dob='1994-10-02';
	echo 'Connected Successfully!';
	$sql="delete from demo where dob='$dob'";
	echo $sql ."<br>";
	if(mysqli_query($con,$sql))
	{
		echo 'Record deleted!';
	}
	else
	{
		echo 'Record not deleted!'.mysqli_error($con);
	}
		if(mysqli_close($con))
		{
			echo 'connection closed!<br>';
		}
		else
		{
			echo 'connection not closed!<br>';
		}
	}
	catch(Exception $e)
	{
		echo 'Exception caught'.$e->getMessage();
	}
?>
