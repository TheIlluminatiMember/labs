<!DOCTYPE HTML>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab7">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 07</title>
	</head>
	<body>
		<h3>PHP Lab 7</h3>
		<hr />
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
						<input type="radio" name="pay_method" title="pay_paypal" value="paypal" required>
						<label for="paypal">Paypal</label>
						<input type="radio" name="pay_method" title="pay_master" value="master" required>
						<label for="master">Mastercard</label>
						<input type="radio" name="pay_method" title="pay_ideal" value="ideal" required>
						<label for="ideal">IDeal</label>
					</td>
				</tr>
				<tr>
					<td>
						<img src="product.jpg" alt="Toshiba Satellite A100-510">
					</td>				
				</tr>
				<tr>
					<td>
						Toshiba Satellite A100-510 Price $ 999,99
					</td>				
				</tr>
				<tr>
					<td>
						<input type="hidden" name="toshiba_item" value="Laptop" />
						<input type="hidden" name="toshiba_brand" value="Toshiba" />
						<input type="hidden" name="toshiba_model" value="Satalite" />
						<select name="toshiba_os">
							<option value="os_winxp"> Windows XP 		</option>
							<option value="os_winvis"> Windows Vista 	</option>
							<option value="os_linmin"> Linux Mint 		</option>
						</select>
						Amount:
						<input type="text" size="2" maxlength="3" name="toshiba_amount" value="0" />
						<input type="hidden" name="toshiba_price" value="999.99" />
						<input type="image" src="orderbut.png" width="100" border="0" value="order">
						<hr />
					</td>				
				</tr>
			</form>
		</table>
		
		<?php
			include("orderfunctions.php");
			$discount=0;
			
			if (isset ($_POST["gold"]))
				{$discount = $discount + 15;	}
			if (isset ($_POST["silver"]))
				{$discount = $discount + 10;	}
			if (isset ($_POST["bronze"]))
				{$discount = $discount + 5;	}
			
			echo ("<br />discount is ". $discount ."%<br />");
			
			$toshiba_amount = 0;
			
			if(isset ($_POST["toshiba_amount"]))
			{$toshiba_amount = $_POST["toshiba_amount"];}
			$toshiba_price = 999.99;
			$totalprice = $toshiba_amount * $toshiba_price;
			
			echo ("<br />The total price without discount: € ". $totalprice. "<br />");
			$totalprice = $totalprice - ($totalprice * $discount /100);
			echo ("<br />The total price with discount: € ". $totalprice ."<br />");
			
			if($totalprice > 5000){
				echo ("<br /> Credit limit reached --- Your order can only reach a maximum amount of €5000.00 <br />");
			}
			else{
				$pay_method="none";
				if(isset ($_POST["pay_method"])){
					$pay_method = $_POST["pay_method"];}
				switch($pay_method){
					case "paypal":
						echo ("<br />Your payment is proccesed using PayPal<br />");
					break;
					case "master":
						echo ("<br />Your payment is proccesed using Mastercard<br />");
					break;
					case "ideal":
						echo ("<br />Your payment is proccesed using IDeal<br />");
					break;
				}
			}
			
			if(isset($_POST['toshiba_os'])){
				$os=$_POST['toshiba_os'];
				$b = available("Toshiba", $os);
				if($b===false){
					echo  $os . " is not available for this device.";
				}
				else{
					echo "This device is available";
				}
			}
			ordersummary();
		?>
	</body>
</html>