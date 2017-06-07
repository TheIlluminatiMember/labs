<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<meta name="description"	content="lab06">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 06</title>
	</head>
	<body>
		<h3>php Lab 6</h3>
		<h4>Travelcosts</h4>
			
		<?php
			function travelcosts($depart, $destination)
			{
				$travelcosts = array();
				$travelcosts[1] = array();
				$travelcosts[2] = array();
				$travelcosts[3] = array();
				$travelcosts[4] = array();
				
				$travelcosts[1][1] = 0;
				$travelcosts[1][2] = 30;
				$travelcosts[1][3] = 60;
				$travelcosts[1][4] = 90;
				
				$travelcosts[2][1] = 30;
				$travelcosts[2][2] = 0;
				$travelcosts[2][3] = 40;
				$travelcosts[2][4] = 20;
				
				$travelcosts[3][1] = 60;
				$travelcosts[3][2] = 40;
				$travelcosts[3][3] = 0;
				$travelcosts[3][4] = 20;
				
				$travelcosts[4][1] = 90;
				$travelcosts[4][2] = 20;
				$travelcosts[4][3] = 10;
				$travelcosts[4][4] = 0;
				
				echo ("The travelcosts will be " . $travelcosts[$depart][$destination] . " Euro's ");
			}
		?>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Depart: 
				<select name="depart">
					<option value="1">Amsterdam</option>
					<option value="2">Utrecht</option>
					<option value="3">Den Haag</option>
					<option value="4">Rotterdam</option>
				</select>
			Destination: 
				<select name="destination">
					<option value="1">Amsterdam</option>
					<option value="2">Utrecht</option>
					<option value="3">Den Haag</option>
					<option value="4">Rotterdam</option>
				</select>
			<br>
			<br>
			<input type="image" src="orderbut.png" width="100" border="0" value="submit">
		</form>
		<p>-------------------------------------------------------</p>
		<?php
			if(isset($_POST["depart"]) && isset($_POST["destination"]))
			{
				echo travelcosts($_POST["depart"],$_POST["destination"]);
			}
		?>
	</body>
	</html>