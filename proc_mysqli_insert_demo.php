<?php 
	$ip="localhost";
	$username="root";
	$password="eazy";
	$db="chaitany_demo";

	$con=mysqli_connect($ip,$username,$password,$db);
	if(!$con)
	{
		mysqli_connect_error("Could not connect to the database".mysqli_connect_error());
	}
	$name='Saurabh sangole';
	$mobile='8149750231';
	$weight='45.62';
	$dob='1994-10-02';
	echo "Connected Successfully !<br>";
	$sql="insert into demo(name,mobile,weight,dob)values('$name','$mobile','$weight','$dob')";
	echo $sql.'<br>';
	if( mysqli_query($con,$sql))
	{
		echo "Record Inserted<br>";
	}
	else
	{
		echo "Record not Inserted.<br>Error:".mysqli_error($con)."<br>";
	}
	
	mysqli_close($con);
?>
