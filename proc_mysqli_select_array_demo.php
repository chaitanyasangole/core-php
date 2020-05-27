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
		while($row=mysqli_fetch_array($res))
		{
			$i++;
			echo $i.') Name:'.$row[0].', Mobile:'.$row[1].', Weight:'.$row[2].', 	DOB:'.$row[3];		
			echo '<br>';
		}
	}
	mysqli_close($con);

?>
