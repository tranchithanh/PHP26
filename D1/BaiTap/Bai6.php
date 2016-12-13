<!DOCTYPE html>
<html>
	<head>
		<title>Bài 6</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$tongbanghi = 57;
			define("SO_BAN_GHI_CUA_TRANG", 10);
			$sotrang = $tongbanghi / SO_BAN_GHI_CUA_TRANG;

			echo 'Số trang làm tròn tăng là : <strong>'.ceil($sotrang).'</strong><br />';
			echo 'Số trang làm tròn giảm là : <strong>'.floor($sotrang).'</trong><br />';
		?>
	</body>
</html>