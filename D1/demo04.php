<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Header</title>
	</head>
	<body>
		<?php
			header("location: http://www.fb.com/tranchithanh2810/");
			exit();
		?>
	</body>
</html>
<?php
	ob_end_flush();
?>