<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h3>WHILE</h3>
		<?php
			$t=0;$i=1;
			while ($i <= 10) {
				echo $i." ";
				$t+=$i;
				$i++;
			}
			echo $t;
		?>
	</body>
</html>