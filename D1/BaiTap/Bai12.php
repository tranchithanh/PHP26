<?php ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài 12</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$rand = rand(1,3);

			if ($rand == 1) {
				header("location: http://google.com");
				exit();
			}elseif ($rand == 2) {
				header("location: http://yahoo.com");
				exit();
			}else{
				header("location: http://facebook.com");
				exit();
			}
		?>
	</body>
</html>
<?php ob_end_flush(); ?>