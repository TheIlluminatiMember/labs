<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab09">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 09</title>
	</head>
	<body>
		<h3>Voorbeeld van de do while-lus</h3>
		
		<?php		
			$saldo = 100;
			$rente = 0.1;
			$maand = 1;
			echo "Begin saldo is:" . $saldo;
			echo "<br>START...";
			
			do
			{
				$saldo = $saldo + ($saldo * $rente);
				if($maand === 2)
				{
					echo "<br> Februari telt niet mee";
					$maand++;
					continue;
				}
				
				if($saldo >= 2000)
				{
					break;
				}
				
				if($maand == 6 && $saldo <1000)
				{
					echo "<br>Je saldo is te laag!";
					break;
				}
				
				echo " <br> Maand " . $maand . " je saldo is:" . $saldo;
				$maand++;
			}
			while($saldo < 2000);
			echo " <br> Maximale saldo is berijkt!";
			
		?>
	</body>
	</html>