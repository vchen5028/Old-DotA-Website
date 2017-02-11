<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Guides</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<img class="header" src="header.jpg" />
		<form action="guides.php" method="post">
		
			<?php

			$build=$_POST['build'];
			$item1=$_POST['item1'];
			$item2=$_POST['item2'];
			$item3=$_POST['item3'];
			$item4=$_POST['item4'];
			$item5=$_POST['item5'];
			$item6=$_POST['item6'];
			$comment=$_POST['comment'];
			
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$select = "SELECT * FROM `itemstats` WHERE listname='$item1'";
			$select2 = "SELECT * FROM `itemstats` WHERE listname='$item2'";
			$select3 = "SELECT * FROM `itemstats` WHERE listname='$item3'";
			$select4 = "SELECT * FROM `itemstats` WHERE listname='$item4'";
			$select5 = "SELECT * FROM `itemstats` WHERE listname='$item5'";
			$select6 = "SELECT * FROM `itemstats` WHERE listname='$item6'";
			$result = mysql_query($select);
			$result2 = mysql_query($select2);
			$result3 = mysql_query($select3);
			$result4 = mysql_query($select4);
			$result5 = mysql_query($select5);
			$result6 = mysql_query($select6);
			$total = (mysql_result($result, 0, 2)+mysql_result($result2, 0, 2)+mysql_result($result3, 0, 2)+mysql_result($result4, 0, 2)+mysql_result($result5, 0, 2)+mysql_result($result6, 0, 2));

			mysql_select_db("dota", $db);
			mysql_query("INSERT INTO guides (buildname, item1, item2, item3, item4, item5, item6, totalprice, comments) 
			VALUES ('$build', '$item1', '$item2', '$item3', '$item4', '$item5', '$item6', '$total', '$comment')");
		
			
			
			?>
			
		</form>
		<div> Your build has been submitted! Go to check it out now.</div>
		<div><a href="guides.php"> Redirection </a></div>
		<img class="footer" src="footer.jpg" />
		
		
	</body>
	
</html>
