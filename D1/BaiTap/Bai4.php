<!DOCTYPE html>
<html>
	<head>
		<title>Bài 4</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			define("SO_BAN_GHI_CUA_TRANG", 10);
			$tongbanghi = 48;
			$sotrang = $tongbanghi / SO_BAN_GHI_CUA_TRANG;

			echo 'Tổng bản ghi là '.$tongbanghi.' - Số bản ghi của trang là '.SO_BAN_GHI_CUA_TRANG.'. Vậy số trang là '.ceil($sotrang);
		?>
	</body>
</html>