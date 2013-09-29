<?php 
	include "../backend/get_vend_data.php";
	$data = getData();
	if( is_null($data))
	{
		echo $error;
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vendomatic</title>
	<link rel="stylesheet" href="css/select.css"></link>
	<script src="../jquery/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<div>
	<h1>Vendomatic</h1>
	<p>Novelty Stuff for Programmers</p>
</div>
<!-- Search Form -->
<div>
	<form>
		<input type="text" name="Search" placeholder="Search by Name or Description" />
		<button type="button">Search</button>
	</form>
</div>

<!-- Item table -->
<div>
	<table>
		<!-- Table Headings-->
		<tr>
			<th>Item Name</th>
			<th>Item Description</th>
			<th>Item Cost</th>
			<th>Item Stock</th>
			<th>ITEM CODE</th>
			<th>Purchase?</th>
		</tr>
		<?php
			while($obj = $data->fetch_object())
			{
		?>
		<tr>
			<td><?php echo $obj->item_name; ?></td>
			<td><?php echo $obj->item_desc; ?></td>
			<td><?php echo $obj->item_stock; ?></td>
			<td><?php echo $obj->item_price; ?></td>
			<td><?php echo $obj->item_ref; ?></td>
			<td><button type="button">Purchase</button></td>
		</tr>

		<?php
			}
		?>
	</table>
</div>
</body>
</html>