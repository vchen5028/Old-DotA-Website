<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Guides</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
	<form method="post" action="getGuide.php">
		<img class="header" src="header.jpg" />
		<div>
			<?php
				$print=array();
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$guides = "SELECT * FROM `guides`";
			$result = mysql_query($guides);
			$numRows = mysql_num_rows($result);
			for($i = 0; $i < $numRows; $i++)
			{
					echo "<input type='submit' value='".mysql_result($result, $i, 0)."' name='getGuide' />";
					echo "<br />";
			} 
			?> 
			</div>
			
		<img class="footer" src="footer.jpg" />
	</form>
	<a href="content.html"> Return to Content </a>
	</body>
	
</html>