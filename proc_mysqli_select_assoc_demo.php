<?php 
	$con=mysqli_connect('localhost','root','eazy');
	if(!$con)
	{
		die("Connection Error!".mysqli_connect_error());
	}
	echo 'Connected Successfully!<br>';

	mysqli_select_db($con,'chaitany_demo') or die("Database not connected");

	echo 'Database selected!<br>';

	$sql="select name,mobile,weight,dob from demo order by name";	
	
	echo $sql.'<br>';	

	$res=mysqli_query($con,$sql);
	
	$no=mysqli_num_rows($res);
	if($res)
	{
		echo $no.' Records found!';
			echo '<br>';
	}
	else
	{
		echo 'Records not found.Error:'.mysqli_error($con);
			echo '<br>';
	}
	if( $no > 0)
	{
		$i=0;
		while($row=mysqli_fetch_assoc($res))
		{
			$i++;
			echo $i.') Name:'.$row['name'].', Mobile:'.$row['mobile'].', Weight:'.$row['weight'].', 	DOB:'.$row['dob'];		
			echo '<br>';
		}
	}
	mysqli_close($con);

?>
