<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab04">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 04</title>
	</head>
	<body>
		<h3>php lab 04 </h3>
		<table border=0 cellpadding=0 cellpadding=0 width=100%>
			<form name="orderform"
				action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
				method="post">
				
				<tr>
					<td>
						<input type="checkbox" name="gold" value="15">		Gold 15% <br />
						<input type="checkbox" name="silver" value="10">	Silver 10% <br />
						<input type="checkbox" name="bronze" value="5">		Bronze 5% <br />
					</td>
				</tr>
				<tr>
					<td>
						<img src="product.jpg" style=width:150px;height:150px />
					</td>
				</tr>
				<tr>
					<td>
						Toshiba Satellite A100-510	Baseprice 999.999
					</td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="toshiba_item" value="Laptop" />
						<input type="hidden" name="toshiba_brand" value="Toshiba" />
						<input type="hidden" name="toshiba_model" value="Satalite" />
						Amount: 
						<input type="text" size="2" maxlength="3" name="toshiba_amount" value="0" />
						<input type="hidden" name="toshiba_price" value="999.99" />
						<input type="image" src="orderbut.png" width="100" border="0" value="order">
					</td>
				</tr>	
			</form>
		</table>
		<?php
			if(isset($_POST["gold"]) || isset($_POST["silver"]) || isset($_POST["bronze"]))
			{
				$discount=0;
			
			if (isset ($_POST["gold"]))
				{$discount = $discount + 15;	}
			if (isset ($_POST["silver"]))
				{$discount = $discount + 10;	}
			if (isset ($_POST["bronze"]))
				{$discount = $discount + 5;	}
			
			echo "Discount is: $discount%";
			}
		?>
	</body>
</html>