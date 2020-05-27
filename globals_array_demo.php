<?php 
	
	$a=25;

	function Test()
	{
		$b='chaitany';
		
		echo '<br>local variable='.$b;
		echo '<br>global variable='.$GLOBALS['a'];
		$GLOBALS['a']=30;
		echo '<br>global variable value changed=30';
	}
	Test();
	echo '<br>';
	echo '<br>global variable='.$a;
	echo '<br>local variable='.$b;
/* 
	Observation : When you have to change value of global variable within function use Globals array.
*/

?>
