<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title><?php $_POST['hero'] ?></title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<?php
		$hero=$_POST['hero'];
		$print1=array();
		$print2=array();
		$print3=array();
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$heroes = "SELECT * FROM `heroes` WHERE class='$hero'";
			$images = "SELECT * FROM `images` WHERE class='$hero'";
			$skills = "SELECT * FROM `skills` WHERE class='$hero'";
			$result1 = mysql_query($heroes);
			$result2 = mysql_query($images);
			$result3 = mysql_query($skills);
			$numRows1 = mysql_num_rows($result1);
			$numRows2 = mysql_num_rows($result2);
			$numRows3 = mysql_num_rows($result3);
			for($i = 0; $i < $numRows1; $i++)
			{
				for($j = 0; $j < 4; $j++)
				{
					array_push($print1, mysql_result($result1, $i, $j));
				}
			}
			for($i = 0; $i < $numRows2; $i++)
			{
				for($j = 0; $j < 7; $j++)
				{
					array_push($print2, mysql_result($result2, $i, $j));
				}
			}
			for($i = 0; $i < $numRows3; $i++)
			{
				for($j = 0; $j < 9; $j++)
				{
					array_push($print3, mysql_result($result3, $i, $j));
				}
			}
		?>
		<img class="header" src="header.jpg" />
		<div class="name"><?php echo $print1[0]; ?></div>
		<div class="char"><?php echo $print1[1]; ?></div>		
		<img class="gif" src="<?php echo $print2[2]; ?>" />
		<img class="heroes" src="<?php echo $print2[1]; ?>" />
		<br />
		<br />
		<div>Stats</div>
		<div class="stats"> 
		<?php echo $print1[2]; ?>
		<br />
		<br />
		</div>
		<div>Background Story</div>
		<div class="background"><?php echo $print1[3]; ?> </div>
		<br />
		<br />
		<div>Skills</div>
		<div class="skill"><?php echo $print3[1]; ?></div>
		<img class="skill" src="<?php echo $print2[3]; ?>" />
		<div class="skillinfo"><?php echo $print3[5]; ?></div>
		<div class="skill"><?php echo $print3[2]; ?></div>
		<img class="skill" src="<?php echo $print2[4]; ?>" />
		<div class="skillinfo"><?php echo $print3[6]; ?></div>
		<div class="skill"><?php echo $print3[3]; ?></div>
		<img class="skill" src="<?php echo $print2[5]; ?>" />
		<div class="skillinfo"><?php echo $print3[7]; ?></div>
		<div class="skill"><?php echo $print3[4]; ?></div>
		<img class="skill" src="<?php echo $print2[6]; ?>" />
		<div class="skillinfo"><?php echo $print3[8]; ?></div>
		<img class="footer" src="footer.jpg" />
		<a href="content.html"> Return to Content </a>
	</body>

	
</html>