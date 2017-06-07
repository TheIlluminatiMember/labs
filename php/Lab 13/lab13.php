<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab13">
		<meta name="author"			content="Tim van Herwijnen">
		<!--<link rel=stylesheet href=style1.css>-->
		<title>PHP Lab 13</title>
	</head>
	<body>
		<h3>PHP Lab 13</h3>
		<hr />
		<table border=0 cellpadding=0 cellpadding=0 width=100%>
			<form name="orderform"
				action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
				method="post">
				
				<tr>
					<td>
						<h3>Discount</h3>
						<input type="checkbox" name="gold" value="gold">Gold<br />
						<input type="checkbox" name="silver" value="silver">Silver<br />
						<input type="checkbox" name="bronze" value="bronze">Bronze<br />
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="pay_method" title="pay_paypal" value="paypal" required checked>
						<label for="paypal">Paypal</label>
						<input type="radio" name="pay_method" title="pay_master" value="master" required>
						<label for="master">Mastercard</label>
						<input type="radio" name="pay_method" title="pay_ideal" value="ideal" required>
						<label for="ideal">IDeal</label>
					</td>
				</tr>
				<tr>
					<td>
						<img src="product.jpg" style=width:150px;height:150px; />
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
							<option value="Windows XP"> Windows XP 		</option>
							<option value="Windows Vista"> Windows Vista 	</option>
							<option value="Linnux Mint"> Linux Mint 		</option>
						</select>
						Amount:
						<input type="text" size="2" maxlength="3" name="toshiba_amount" value="0" />
						<input type="hidden" name="toshiba_price" value="999.99" />
						<hr />
					</td>				
				</tr>
				<tr>
					<td>
						<img src="product2.jpg" style=width:150px;height:150px />
					</td>				
				</tr>
				<tr>
					<td>
						Acer Aspire 5735Z Price $ 529,99
					</td>				
				</tr>
				<tr>
					<td>
						<input type="hidden" name="acer_item" value="Laptop" />
						<input type="hidden" name="acer_brand" value="Acer" />
						<input type="hidden" name="acer_model" value="Aspire" />
						<select name="acer_os">
							<option value="Windows XP"> Windows XP 		</option>
							<option value="os_winvis"> Windows Vista 	</option>
							<option value="os_linmin"> Linux Mint 		</option>
						</select>
						Amount:
						<input type="text" size="2" maxlength="3" name="acer_amount" value="0" />
						<input type="hidden" name="acer_price" value="529.99" />
						<input type="image" src="orderbut.png" width="200" border="0" value="order">
					</td>				
				</tr>
			</form>
		</table>
		<br />
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
			//Toshiba
			$toshiba_amount = 0;
			
			if(isset ($_POST["toshiba_amount"]))
				{$toshiba_amount = $_POST["toshiba_amount"];}
			$toshiba_price = 999.99;
			$totalprice0 = $toshiba_amount * $toshiba_price;
			
			echo ("<br />[Toshiba] The total price without discount: € ". $totalprice0. "<br />");
			$totalprice0 = $totalprice0 - ($totalprice0 * $discount /100);
			echo ("<br />[Toshiba] The total price with discount: € ". $totalprice0 ."<br />");
			//Acer
			$acer_amount = 0;
			
			if(isset ($_POST["acer_amount"]))
				{$acer_amount = $_POST["acer_amount"];}
			$acer_price = 529.99;
			$totalprice1 = $acer_amount * $acer_price;
			
			echo ("<br />[Acer] The total price without discount: € ". $totalprice1. "<br />");
			$totalprice1 = $totalprice1 - ($totalprice1 * $discount /100);
			echo ("<br />[Acer] The total price with discount: € ". $totalprice1 ."<br />");
			
			$totalpricef = $totalprice0 + $totalprice1;
			
			if($totalpricef > 5000){
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
			
			

			echo "<hr />";
			ordersummary($totalpricef);
		?>
		<form name="custinfo", action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table border="1">
				<tr>
					<td colspan="2">
						<b>Customer Order Form</b>
					</td>
				</tr>
				<tr>
					<td width="100">Name: </td>
					<td><input type="text" name="c_name" size="55"></td>
				</tr>
				<tr>
					<td>Adres: </td>
					<td><input type="text" name="c_adres" size="55"></td>
				</tr>
					<tr>
					<td>Residence: </td>
					<td>
					<input type="text" size="34" name="C_res">
					Zip code: <input type="text" size="6" name="c_zip">
					</td>
				</tr>
				<tr>
					<td>e-mail: </td>
					<td><input type="text" size="55" name="c_email"></td>
				</tr>
				<tr>
					<td>Feedback: </td>
					<td><textarea cols="40" rows="33" name="c_feedback"></textarea>></td>
				</tr>
			</table>
		<input type="submit" name="checkout" value="Checkout">
		</form>
      <?php
        if(isset($_POST['checkout']))
        {
          emailcheck();
          postcodecheck();
        }
      ?>
	</body>
</html>