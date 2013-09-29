function add_money(amount)
{
	var value = $('#total').val();
	if(value == "")
	{
		value = parseInt(amount);
	}
	else
	{
		value = parseInt(value*100) + parseInt(amount);
	}
	$('#total').val(parseFloat(value) / parseFloat(100));
}	

function returnCoins()
{
	$('#total').val(0);
}

function add_code(value)
{
	$('#code').val($('#code').val() + value);
}

function clearCode()
{
	$('#code').val("");
}

function purchase()
{
	// do ajax call.
	
}