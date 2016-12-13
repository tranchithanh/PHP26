<?php
	$str1 = "Cố Gắn Học";
	$str2 = " Sẽ Thành Tài";
	define("NAME", "Trần Chí Thành");
	define("DATEOFBIRTH", "28/10/1994");
	define('LEVELSTUDENT', 5);
	
?>
<p>
	<strong>String Lenght : </strong><?php echo strlen($str1); ?>
</p>
<p>
	<strong>String thay thế : </strong>
	<?php
		echo str_replace("Sẽ", "Ắt Sẽ", $str2);
		$str2=str_replace("Sẽ", "Ắt Sẽ", $str2);
	?>
</p>
<p>
	<strong>Name</strong> <?php echo NAME . '<br />'?>
	<strong>Date Of Birth</strong> <?php echo DATEOFBIRTH."<br />"; ?>
	<strong>Level Student</strong> <?php echo LEVELSTUDENT."<br />"; ?>
	<?php
		echo $str1.$str2;
	?>
</p>