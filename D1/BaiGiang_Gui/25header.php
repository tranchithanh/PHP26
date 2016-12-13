<?php 
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Ví dụ HEADER - location</h1>			
		<?php
		header("location: http://vinatab.net");
		exit();
		?>
	</body>
</html>
<?php
ob_end_flush();
?>