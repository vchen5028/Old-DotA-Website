<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Guides</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
		<img class="header" src="header.jpg" />
		<div>
			<?php
			$guide=$_POST['getGuide'];
			$print=array();
			
			$db = mysql_connect("localhost", "root");
			mysql_select_db("dota", $db);
			$select = "SELECT * FROM `guides` WHERE buildname='$guide'";
			$result = mysql_query($select);
			$numRows = mysql_num_rows($result);
			for($i = 0; $i < $numRows; $i++)
			{
					for($j = 0; $j < 9; $j++)
				{
					array_push($print, mysql_result($result, $i, $j));
				}
			}
			
			$select2 = "SELECT * FROM `itemstats` WHERE listname='$print[1]'";
			$select3 = "SELECT * FROM `itemstats` WHERE listname='$print[2]'";
			$select4 = "SELECT * FROM `itemstats` WHERE listname='$print[3]'";
			$select5 = "SELECT * FROM `itemstats` WHERE listname='$print[4]'";
			$select6 = "SELECT * FROM `itemstats` WHERE listname='$print[5]'";
			$select7 = "SELECT * FROM `itemstats` WHERE listname='$print[6]'";
			
			$result2 = mysql_query($select2);
			$result3 = mysql_query($select3);
			$result4 = mysql_query($select4);
			$result5 = mysql_query($select5);
			$result6 = mysql_query($select6);
			$result7 = mysql_query($select7);
			
			$numStats2 = mysql_num_rows($result2);
			$numStats3 = mysql_num_rows($result3);
			$numStats4 = mysql_num_rows($result4);
			$numStats5 = mysql_num_rows($result5);
			$numStats6 = mysql_num_rows($result6);
			$numStats7 = mysql_num_rows($result7);
			
			
			?> 
			</div>
			<div> <?php echo mysql_result($result, 0, 0); ?> </div>
			
		<img style="margin-left:38%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[1]; ?>.jpg" />
		<img style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[2]; ?>.jpg" />
		<img style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[3]; ?>.jpg" />
		<img style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[4]; ?>.jpg" />
		<img style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[5]; ?>.jpg" />
		<img style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/<?php echo $print[6]; ?>.jpg" />
		<div class="skill"> <?php echo mysql_result($result, 0, 7); ?> Gold </div>
		<textarea style="margin-left:auto;margin-right:auto;display:block;height:100px" size="200px"> <?php echo $print[8]; ?> </textarea><br />
		<div style="float:left"> <?php for($i = 0; $i < $numStats2; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result2, $i, $j)."<br />";
				}
			} ?>
		</div>
		<div style="float:right"> <?php for($i = 0; $i < $numStats3; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result3, $i, $j)."<br />";
				}
			} ?>
		</div>
		<div style="float:right"> <?php for($i = 0; $i < $numStats4; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result4, $i, $j)."<br />";
				}
			} ?>
		</div>
		<div style="float:left"> <?php for($i = 0; $i < $numStats5; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result5, $i, $j)."<br />";
				}
			} ?>
		</div>
		<div style="float:left"> <?php for($i = 0; $i < $numStats6; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result6, $i, $j)."<br />";
				}
			} ?>
		</div>
		<div> <?php for($i = 0; $i < $numStats7; $i++)
			{
					for($j = 3; $j < 8; $j++)
				{
					echo mysql_result($result7, $i, $j)."<br />";
				}
			} ?>
		</div>
		<img class="footer" src="footer.jpg" />
		<a href="content.html"> Return to Content </a>
	</body>
	
</html>