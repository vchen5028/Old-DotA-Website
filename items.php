<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title><?php $_POST['hero'] ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<?php
		$item=$_POST['getItem'];
		$print=array();
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$select = "SELECT * FROM `itemstats` WHERE listname='$item'";
			$result = mysql_query($select);
			$numRows = mysql_num_rows($result);
			for($i = 0; $i < $numRows; $i++)
			{
				for($j = 0; $j < 8; $j++)
				{
					array_push($print, mysql_result($result, $i, $j));
				}
			}
		?>
		<img class="header" src="header.jpg" />
		<br />
		<br />
		<div>Stats</div>
		<div class="skill"><?php echo $print[1]; ?></div>
		<img style="margin-left:auto;margin-right:auto;display:block" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[0]; ?>.jpg" />
		<div class="skillinfo">Cost:<?php echo $print[2]; ?> Gold</div>
		<div class="skill"><?php echo $print[3]; ?></div>
		<div class="skill"><?php echo $print[4]; ?></div>
		<div class="skill"><?php echo $print[5]; ?></div>
		<div class="skill"><?php echo $print[6]; ?></div>
		<div class="skill"><?php echo $print[7]; ?></div>
	
		<img class="footer" src="footer.jpg" />
		<a href="content.html"> Return to Content </a>
	</body>

	
</html>