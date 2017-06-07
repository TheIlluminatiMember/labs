<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab03">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 03</title>
	</head>
	<body>
		<h3>PHP Lab </h3>
		<?php
			$toshiba["merk"] = "Toshiba Satellite";
			$toshiba["model"] = "A100";
			$toshiba["os"] = "Windows XP";
			$toshiba["voorraad"] = 80;
			$toshiba["prijs"] = 999;
			
			$totaal = 0;
			$acer["merk"] = "Acer Aspire";
			$acer["model"] = "5732Z";
			$acer["os"] = "Linux";
			$acer["voorraad"] = 0;
			$acer["prijs"] = 888;
			
			$hp["merk"] = "HP";
			$hp["model"] = "200X";
			$hp["os"] = "Vista";
			$hp["voorraad"] = 50;
			$hp["prijs"] = 777;
			
			$totaal = 0;
				($toshiba["voorraad"] === 0 ? $totaal = $totaal + 0 : $totaal = $totaal + $toshiba["prijs"]);
				($acer["voorraad"] === 0 ? $totaal = $totaal + 0 : $totaal = $totaal + $acer["prijs"]);
				($hp["voorraad"] === 0 ? $totaal = $totaal + 0 : $totaal = $totaal + $hp["prijs"]);
				
			echo
			("
				<table border='1'>
					<caption>
						<strong>SML laptops</strong>
					</caption>
					<thead>
						<tr>
							<th> Merk </th>
							<th> Model </th>
							<th> Operating system </th>
							<th> Voorraad </th>
							<th> Prijs </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>" .$toshiba["merk"]. "</td>
							<td>" .$toshiba["model"]. "</td>
							<td>" .$toshiba["os"]. "</td>
							<td>" .($toshiba["voorraad"] === 0 ? 'uit voorraad' : 'in voorraad'). "</td>
							<td>" .($toshiba["voorraad"] === 0 ? "---" : $toshiba["prijs"]). "</td>
						</tr>
						<tr>
							<td>" .$acer["merk"]. "</td>
							<td>" .$acer["model"]. "</td>
							<td>" .$acer["os"]. "</td>
							<td>" .($acer["voorraad"] === 0 ? 'uit voorraad' : 'in voorraad'). "</td>
							<td>" .($acer["voorraad"] === 0 ? "---" : $acer["prijs"]). "</td>
						</tr>
						<tr>
							<td>" .$hp["merk"]. "</td>
							<td>" .$hp["model"]. "</td>
							<td>" .$hp["os"]. "</td>
							<td>" .($hp["voorraad"] === 0 ? 'uit voorraad' : 'in voorraad'). "</td>
							<td>" .($hp["voorraad"] === 0 ? "---" : $hp["prijs"]). "</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan='4'> Totaal </td>
							<td>$totaal</td>
						</tr>
					</tfoot>
				</table>
			");
		?>
	</body>
	</html>