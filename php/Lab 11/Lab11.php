<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab11">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 11</title>
	</head>
	<body>
		<h3>PHP Lab 11 </h3>
		
		<?php
			$GLOBALS['url'] = "www.google.nl";
			// superglobale variabeele
			global $email;
			$email = "example@mail.com";
			// globale variable
			
			define('ADRES', "Voorbeeldstraat 69"); 	//constate
			define('BTW', 0,19);				//constate
			
			echo $email;

			function show()
			{
				global $email;
					//maak de globale variabele hier zichtbaar
				echo "</br>URL: " . $GLOBALS['url'];
				echo "</br>email: " . $email;
			}
			
			function showbezoekers()
			{
				static $aantalbezoekers;
					//static variabele binnen functie
				$aantalbezoekers++;
				echo "</br>Aantal Bezoekers: " . $aantalbezoekers;
			}
			
			show();
			showbezoekers();
			showbezoekers();
			aboutus();
			
			
			
			function aboutus()
			{
				$bedrijfsnaam = "XXL Computers";
				$bedrijfsadres = "Langelaan 1234";
				$telefoonnummer = "0201234567";
				
				echo "</br></br></br> About Us";
				echo "</br>" . $bedrijfsnaam;
				echo "</br>" . $bedrijfsadres;
				echo "</br>" . $telefoonnummer;
			}
		?>
	</body>
</html>