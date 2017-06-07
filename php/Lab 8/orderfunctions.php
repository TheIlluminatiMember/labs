<?php
	function available($brand, $os){
		$available = array(
			"Toshiba" => array(
				"os_winxp" => true,
				"os_winvis" => false,
				"os_linmin" => false
			),
			"Acer" => array(
				"os_winxp" => true,
				"os_winvis" => true,
				"os_linmin" => true
			),
			"Hp" => array(
				"os_winxp" => true,
				"os_winvis" => false,
				"os_linmin" => false
			)
		);
		return ($available[$brand][$os]);
	}
	
	function ordersummary(){
		$info[1] = "_item";
		$info[2] = "_brand";
		$info[3] = "_model";
		$info[4] = "_os";
		$info[5] = "_amount";
		$info[6] = "_price";
		
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
				</tr>
			</thead>
			<tbody>
		";
		
		$row = "<tr>";
		for ($x=1; $x<=sizeof($info); $x++ )
		{
			$row = $row ."<td>". $_POST["toshiba".$info[$x]] ."</td>";
		}
		$row = $row ."</tr>";
		echo $row;
		echo "</tbody></table>";
	}
?>