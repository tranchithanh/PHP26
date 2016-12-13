<?php ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài 1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$a = rand(1,3);
			
			if ($a == 1) {
				header("location: http://google.com");
				exit();
			}elseif ($a == 2) {
				header("location: http://yahoo.com");
				exit();
			}else{
				header("location: http://facebook.com");
				exit();
			}

			if ($a % 2 == 0) {
				echo "{$a} là số chẵn";
			}else{
				echo "{$a} là số lẻ";
			}
		?>
	</body>
</html>
<?php ob_end_flush(); ?>