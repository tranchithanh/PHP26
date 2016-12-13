<?php
	echo "<p>".rand(1,3)."</p>";
?>
<style type="text/css">
	p{
		margin:10px auto;
		color:red;
		background-color:yellow;
		padding:10px;
		width:10px;
	}
</style>

<?php
	$a = 5;
	if (isset($a)) {
		echo "a = {$a}";
	}else {
		echo "khong ton tai bien a";
	}
?>

<?php
	$a = 5;
	unset($a);
	if (isset($a)) {
		echo "a = {$a}";
	}else {
		echo "khong ton tai bien a";
	}
?>

<?php
	$b = 10;
	$check = true;

	var_dump($b);
	var_dump($check);
?>