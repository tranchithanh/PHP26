<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Vòng lặp while</h1>			
		<?php
		$tong = 0; $n = 10; $i = 0;
		while ($i <= $n){
			$i = $i + 1;
			$tong = $tong + $i;
		}
		
		echo "Tổng là {$tong}";
		?>
	</body>
</html>