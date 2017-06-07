<?php
	function available($brand, $os){
		$available = array(
			"Toshiba" => array(
				"Windows XP" => true,
				"Windows Vista" => false,
				"Linnux Mint" => false
			),
			"Acer" => array(
				"Windows XP" => true,
				"Windows Vista" => true,
				"Linnux Mint" => true
			),
			"Hp" => array(
				"Windows XP" => true,
				"Windows Vista" => false,
				"Linnux Mint" => false
			)
		);
		return ($available[$brand][$os]);
	}
	
	//Toshiba
	
	if(isset($_POST['toshiba_os'])){
		$os=$_POST['toshiba_os'];
		$b = available("Toshiba", $os);
		if($b===false){
			$toshiba_os_a =  "No";
		}
		else{
			$toshiba_os_a = "Yes";
		}
	}
	
	//Acer
	if(isset($_POST['acer_os'])){
		$os=$_POST['acer_os'];
		$b = available("Acer", $os);
		if($b===false){
			$acer_os_a = "No";
			global $acer_os_a;
		}
		else{
			$acer_os_a = "Yes";
			global $acer_os_a;
		}
	};
	
	
	function ordersummary($totalpricet){
		
		$info[1] = "_item";
		$info[2] = "_brand";
		$info[3] = "_model";
		$info[4] = "_os";
		$info[5] = "_amount";
		$info[6] = "_price";
		echo $acer_os_a;
		echo 
		"	
			<br />
			<table width='80%' border='1'>
			<caption>
				<strong>Order summary</strong>
			</caption>
			<thead>
				<tr>
					<th> Product	</th>
					<th> Merk		</th>
					<th> Model		</th>
					<th> OS			</th>
					<th> Amount		</th>
					<th> Baseprice	</th>
					<th> Available	</th>
				</tr>
			</thead>
				
				
		<tbody>
		";
		
		$row = "<tr>";
		for ($x=1; $x<=sizeof($info); $x++ )
		{
			$row = $row ."<td>". $_POST["toshiba".$info[$x]] ."</td>";
		};
		$row = $row ."</tr>";
		for ($x=1; $x<=sizeof($info); $x++ )
		{
			$row = $row ."<td>". $_POST["acer".$info[$x]] ."</td>";
		};
		$row = $row ."</tr>";
		echo $row;
		echo "<td colspan=7 style=text-align:center;>". "Total: " .$totalpricet ."</td>";
		echo "</tbody></table>";
	}
?>