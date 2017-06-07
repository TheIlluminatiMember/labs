<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab7">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 02</title>
	</head>
	<body>
		<h3>PHP Lab </h3>
		<?php
			$merk = "Toshiba Satellite"; 
			$model = "A100"; 
			$os = "Windows XP"; 
			$voorraad = 80; 
			$prijs = 999; 
			
			$merk1 = "Acer Aspire";
			$model1 = "5732Z";
			$os1 = "Linux";
			$voorraad1 = 0;
			$prijs1 = 888;
			
			$merk2 = "HP";
			$model2 = "200X";
			$os2 = "Vista";
			$voorraad2 = 50;
			$prijs2 = 777;
			
			$totaal = 0;
			$totaal += $prijs;
			$totaal += $prijs1;
			$totaal += $prijs2;
			
			echo("<table border='1'> " .
				"<caption>
					<strong>SML laptops</strong>
				 </caption>
				 <thead>
					<tr><th>Merk</th><th>Model</th><th>Operating system</th><th>Voorraad</th><th>Prijs</th></tr>
				 </thead>
				 <tbody>
					<tr>
					<td>" . $merk . "</td>" .
					"<td>" . $model . "</td>" .
					"<td>" . $os . "</td>" .
					"<td>" . $voorraad . "</td>" .
					"<td>" . $prijs . "</td>" .
					"</tr>
					
					<tr>
					<td>" . $merk1 . "</td>" .
					"<td>" . $model1 . "</td>" .
					"<td>" . $os1 . "</td>" .
					"<td>" . $voorraad1 . "</td>" .
					"<td>" . $prijs1 . "</td>" .
					"</tr>
					
					<tr>
					<td>" . $merk2 . "</td>" .
					"<td>" . $model2 . "</td>" .
					"<td>" . $os2 . "</td>" .
					"<td>" . $voorraad2 . "</td>" .
					"<td>" . $prijs2 . "</td>" .
					"</tr>
				<tfoot>
				<tr>
					<td colspan='4'>Totaal</td>
					<td>" . $totaal . " </td>
				</tr>
			</tfoot>
		</table>");
		?>
	</body>
</html>