<!DOCTYPE html>
	<html>
	<head>
		<title>Bài 2</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Bài 2</h2>
		<?php
			$arOrder = array(
				1 => array(
					"DateCreate" => "20/1/1986",
					"Active" => 1,
					"DetailID" => 1,
					),
				2 => array(
					"DateCreate" => "30/12/1989",
					"Active" => 1,
					"DetailID" => 1,
					),
				3 => array(
					"DateCreate" => "1/1/1989",
					"Active" => 0,
					"DetailID" => 2,
					),
				4 => array(
					"DateCreate" => "14/5/1995",
					"Active" => 1,
					"DetailID" => 4,
					),
				);
		?>
		<h3>Câu a</h3>
		<table width="600px" style="border:1px solid gray;">
				<tr style="text-align:left">
					<th>key</th>
					<th>DateCreate</th>
					<th>Active</th>
					<th>DetailID</th>
				</tr>
			<?php
				foreach ($arOrder as $key => $id) {
			?>
				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $id['DateCreate']; ?></td>
					<td><?php echo $id['Active']; ?></td>
					<td><?php echo $id['DetailID']; ?></td>
				</tr>
			<?php } ?>
		</table>
		<br />
		<br />

		<h3>Câu b</h3>
		<table width="600px" style="border:1px solid gray;">
				<tr style="text-align:left">
					<th>key</th>
					<th>DateCreate</th>
					<th>Active</th>
				</tr>
			<?php
				foreach ($arOrder as $key => $id) {
					if ($key == 3) {
						echo "<tr>";
							echo "<td>{$key}</td>";
							echo '<td>'.$id['DateCreate'].'</td>';
						if ($id['Active'] == 1) {
							echo "<td>Đơn hàng đã duyệt</td>";
						}else{
							echo "<td>Đơn hàng chưa duyệt</td>";
						}
						echo "</tr>";
					}
				}
			?>
		</table>
		<br />
		<br />
		<h3>Câu c</h3>
		<?php
			$chuathem = count($arOrder);
			$arOrder[5] = array(
				"DateCreate" => "14/9/1987",
				"Active" => 0,
				"DetailID" => 4,
				);
			if (count($arOrder) > $chuathem) {
				echo "Đã thêm";
			}else{
				echo "Chưa thêm";
			}
		?>
		<!-- view mãng arOrder sau khi thêm phần tử thứ 5 -->
		<table width="600px" style="border:1px solid gray;">
				<tr style="text-align:left">
					<th>key</th>
					<th>DateCreate</th>
					<th>Active</th>
					<th>DetailID</th>
				</tr>
			<?php
				foreach ($arOrder as $key => $id) {
			?>
				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $id['DateCreate']; ?></td>
					<td><?php echo $id['Active']; ?></td>
					<td><?php echo $id['DetailID']; ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>