<?php 
	$a=25;//global scope

	function Test()
	{
		global $a;
		$b='chaitany';//local scope

		echo '<br>local variable='.$b;
		echo '<br>global variable='.$a;
	}

	Test();
	echo '<br>';
	echo '<br>global variable='.$a;
	echo '<br>local variable='.$b;
	
?>
