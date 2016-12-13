<?php
	$so = 123456789.987654321;
	$a = 2;
	$b = 3;
	$c = $a * $b;

	echo rand(1,4)."<br />";
	echo ceil($so)."<br />";
	echo floor($so).'<br />';
	echo number_format($so,9,",",".").'<br />';
	echo "Tích a,b la : ".$c;
?>