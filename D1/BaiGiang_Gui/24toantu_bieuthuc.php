<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Biểu thức</h1>			
		<?php
		//cho các biến
		$vong1 = 86; $vong2 = 60; $vong3 = 90;
		//biểu thức
		$kiemtra1 = ($vong1 == $vong3) > $vong2;
		$kiemtra2 = ($vong1 >= $vong3) > $vong2;
		$kiemtra3 = ($vong2 <= $vong1) && ($vong2 < $vong3);
		$kiemtra4 = ($vong1 != $vong3) > $vong2;
		$kiemtra5 = (!($vong1 == 90)) ||  ($vong3 == 90);
		$kiemtra6 = (($vong2 > 60) && ($vong2 < 80)) || (!($vong1 == $vong3));
		$kiemtra7 = !$kiemtra6;
		$kiemtra8 = $kiemtra2 && (!$kiemtra3);
		?>
		
		<?php
		echo "<p>Kết quả: </p>";
		//in kết quả
		echo "<br />kiemtra1: "; var_dump($kiemtra1);
		echo "<br />kiemtra2: "; var_dump($kiemtra2);
		echo "<br />kiemtra3: "; var_dump($kiemtra3);
		echo "<br />kiemtra4: "; var_dump($kiemtra4);
		echo "<br />kiemtra5: "; var_dump($kiemtra5);
		echo "<br />kiemtra6: "; var_dump($kiemtra6);
		echo "<br />kiemtra7: "; var_dump($kiemtra7);
		echo "<br />kiemtra8: "; var_dump($kiemtra8);
		?>

	</body>
</html>