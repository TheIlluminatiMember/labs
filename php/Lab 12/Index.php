<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta name="description"	content="lab7">
		<meta name="author"			content="Tim van Herwijnen">
		<title>PHP Lab 12</title>
	</head>
  <body>
    <h1>COOKIE SAVER</h1>
	<?php include ("cookiefunction.php"); ?>
	<form name="orderform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<tr>
			<td><h2>Name your cookie here: </h2></td>
			<td><input type="text" name="cookie_name"></td>
			<td><input type="submit" name="send" value="create"></td>
			<?php
				$cookie_name = $_POST["cookie_name"];
				$cookie_value = $_POST["cookie_name"];
				setcookie($cookie_name, $cookie_value);
			?>
		</tr>
	</form>
	<?php
		$datum = time();
		$now = getdate($datum);
		$now["hours"] = $now["hours"] + 1;
		echo ("<br>Tijd: " . $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"]);
		
		if(isset($_POST["send"])){
			if(!isset($_COOKIE[$cookie_name])){
				echo "<br>Your cookie '" . $cookie_name . "' did not exist, and is now created!";
			}
			else{
				echo "<br>Your cookie '" . $cookie_name . "' aleready exists, try again!";
			}
		}
	?>
	</body>
</html>
