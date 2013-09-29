<?php
	function getData()
	{
		// Connect to database
		$mysqli = connect();
	
		// Run and check the query
		if($result = $mysqli->query("SELECT * FROM item"))
		{
			return $result;	
		}
		else
		{
			echo "Could not run database query.";
			exit();
		}
	}

	//echo checkCodeExists(1);
	function checkCodeExists($code)
	{
		// Santatise Input
		if(is_numeric($code))
		{
			// Connect to database
			$mysqli = connect();
			// Run and check the query
			$result = $mysqli->query("SELECT item_ref FROM item WHERE item_ref = " . $code);
			if( !is_null($result) && $result->num_rows === 1)
			{
				return 1;
			}
			else
			{
				echo "Could not run database query.";
				exit();
			}
		}
		else
		{
			return 0;
		}
	}

	//echo correctFunds(100,1);
	function correctFunds($amount, $code)
	{
		// Sanatise Input
		if(!is_numeric($amount) || !is_numeric($code))
		{
			return 0;
		}
		else
		{
			$error = "";

			// Connect to database
			$mysqli = connect();

			// Run and check the query
			$result = $mysqli->query("SELECT item_price FROM item WHERE item_ref = " . $code);
			if( !is_null($result) && $result->num_rows === 1)
			{
				$obj = $result->fetch_object();
				if($obj && $amount >= $obj->item_price)
				{
					return 1;
				}
				else
				{
					return 0;
				}
			}
			else
			{
				echo "Could not run database query.";
				exit();
			}

		}
	}

	function connect()
	{
		// Create new mysqli object
		$mysqli = new mysqli("localhost", "root","Masterkey1", "vend");

		// Check the connection
		if($mysqli->connect_errno)
		{
			echo "Failed to conenct to Mysql: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
			exit();
		}
		else
		{
			return $mysqli;
		}

	}
?>