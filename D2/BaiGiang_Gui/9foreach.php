<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Vòng lặp foreach</h1>
	<?php
	$names = array("Nam", "Trung", "Bao", 8 ,10);
		
	echo "<p>In ra cặp key => value của mảng</p>";
	foreach($names as $key=>$name){
		echo $key . "<br />";
		echo $name . "<br />";
	}
	
	echo "<p>In ra value của mảng</p>";
	foreach($names as $name){
		echo $name . "<br />";
	}

	?>
	
	</body>
</html>
