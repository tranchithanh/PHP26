<?php ob_start();?>
<html>
	<head>
		<title>Header</title>
	</head>
	<body>
	<?php 
	$role = rand(1, 3);
	if ($role == 1){
		header("location: admin.php");
		exit();
	} elseif ($role == 2){
		header("location: mod.php");
		exit();
	} else {
		header("location: index.php");
		exit();
	}
	?>
	</body>
</html>
<?php ob_end_flush();?>
