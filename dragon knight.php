<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Dragon Knight</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<?php
		$print=array();
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$cmd = "SELECT * FROM `heroes`";
			$result = mysql_query($cmd);
			$numRows = mysql_num_rows($result);
			for($i = 0; $i < $numRows; $i++)
			{
				for($j = 0; $j < 5; $j++)
				{
					array_push($print, mysql_result($result, $i, $j));
					echo "<br />";
				}
				echo "<br />";
			}
			
			echo $print[4];
		?>
	</body>

	
</html>