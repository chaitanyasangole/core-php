<?php 
	$a=25;

	function Test()
	{
		$b='chaitany';
		echo '<br>local variable='.$b;
		echo '<br>global variable='.$a;
	}
	Test();
	echo '<br>global variable='.$a;
	echo '<br>local variable='.$b;
/*
	Observation :- 
			It seems that global scope variable cannot access within function & local scope variable cannot access 
			outside the function.			
*/
?>
