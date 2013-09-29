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
	<link rel="stylesheet" href="css/index.css"></link>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="jquery/index.js" type="text/javascript"></script>
</head>
<body>
<div>
	<h1>Vendomatic</h1>
	<p>Novelty Stuff for Programmers</p>
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
		</tr>

		<?php
			}
		?>
	</table>
</div>
<!-- Money Entry Form -->
<div>
	<h2>Insert Money:</h2>
	<form>
		<button type="button" onclick="add_money(200)">£2</button>
		<button type="button" onclick="add_money(100)">£1</button>
		<button type="button" onclick="add_money(50)">50p</button>
		<button type="button" onclick="add_money(20)">20p</button>
		<button type="button" onclick="add_money(10)">10p</button>
		<button type="button" onclick="add_money(5)">5p</button>
		<button type="button" onclick="add_money(2)">2p</button>
		<button type="button" onclick="add_money(1)">1p</button>

		Total: £<input type="text" id="total" value="0" name="Total"/>
		<button type="button" onclick="returnCoins()">Return Coins</button>
	</form>

<!-- Number Pad Form -->
<div>
	<h2>Enter the item code:</h2>
	<form>
		<button type="button" onclick="add_code('0')">0</button>
		<button type="button" onclick="add_code('1')">1</button>
		<button type="button" onclick="add_code('2')">2</button>
		<button type="button" onclick="add_code('3')">3</button>
		<button type="button" onclick="add_code('4')">4</button>
		<button type="button" onclick="add_code('5')">5</button>
		<button type="button" onclick="add_code('6')">6</button>
		<button type="button" onclick="add_code('7')">7</button>
		<button type="button" onclick="add_code('8')">8</button>
		<button type="button" onclick="add_code('9')">9</button>

		Code: <input type="text" id="code" name="Code"/>
		<button type="button" onclick="clearCode()">Clear</button>
		<button type="button">PURCHASE</button>
	</form>	
</div>

</div>
</body>
</html>
