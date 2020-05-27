<?php 
	try
	{
	$con=mysqli_connect('localhost','root','eazy','chaitany_demo');

	if(!$con)
	{
		die("Records executed=".mysqli_connect_error());
	}
	
	echo 'Connected Successfully!';

	$name='Meena Sangole';
	$weight=61;
	$dob='1994-10-02';
	$mobile=8983462471;

	$sql="update demo set name='$name',weight=$weight,dob='$dob',mobile=$mobile where dob='$dob'";

	echo $sql.'<br>';

	if(mysqli_query($con,$sql))
	{
		echo 'Records Updated!';
	}
	else
	{
		echo 'Records not Updated! Error:'.mysqli_error($con);
	}

	mysqli_close($con);

	}

	catch(Exception $e)
	{
		echo 'Exception caught'.$e->getMessage();
	}
?>
