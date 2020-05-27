<?php 
	echo '';
	echo 'first call<br>';
	Demo();
	echo 'second call<br>';
	Demo();
	echo 'third call<br>';
	Demo();
	function Demo()
	{
		echo "In Demo function,";
		$i=0;
		echo $i.'<br>';
		$i++;
	}	
	echo '<br><br>';
	echo 'first call<br>';
	Demo1();
	echo 'second call<br>';
	Demo1();
	echo 'third call<br>';
	Demo1();
	function Demo1()
	{
		echo "In Demo1 function,";
		static $i=0;
		echo $i.'<br>';
		$i++;
	}

/*
	Observation :
			Drawback: 
				1) local variables gets deleted when function call end.
			solution : 
				Use static keyword for local variable exist after function call end.
*/
?>
