<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Content Page</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	
	<body>
	
		<img class="header" src="header.jpg" />
		<?php
		
		$initiator=0;
		$ganker=0;
		$carry=0;
		$support=0;
		
		if($_POST['1'] == 'a')
		{
			$initiator += 1;
		}
		if($_POST['1'] == 'b')
		{
			$support += 1;
		}
		if($_POST['1'] == 'c')
		{
			$ganker += 1;
		}
		if($_POST['1'] == 'd')
		{
			$carry += 1;
		}
		if($_POST['2'] == 'a')
		{
			$initiator += 1;
		}
		if($_POST['2'] == 'b')
		{
			$support += 1;
		}
		if($_POST['2'] == 'c')
		{
			$ganker += 1;
		}
		if($_POST['2'] == 'd')
		{
			$carry += 1;
		}
		if($_POST['3'] == 'a')
		{
			$initiator += 1;
		}
		if($_POST['3'] == 'b')
		{
			$support += 1;
		}
		if($_POST['3'] == 'c')
		{
			$ganker += 1;
		}
		if($_POST['3'] == 'd')
		{
			$carry += 1;
		}
		if($_POST['4'] == 'a')
		{
			$initiator += 2;
		}
		if($_POST['4'] == 'b')
		{
			$support += 2;
		}
		if($_POST['4'] == 'c')
		{
			$ganker += 2;
		}
		if($_POST['4'] == 'd')
		{
			$carry += 2;
		}
		
		if($carry>$ganker && $carry>$support && $carry>$intiator)
		{
			echo "<div>You are a carry player. You don't need a team, you are the team. However, in order for this to happen, you must farm up a lot and maintain minimal death</div>";
			echo "<div>Heroes you might favor: Phantom Assassin, Terrorblade, Phantom Lancer, Dragon Knight. </div>";
		}
			
		if($ganker>$carry && $ganker>$support && $ganker>$intiator)
		{
			echo "<div>You are a ganker player. You wander the map looking to catch prey off guard. You are a big team player and require situations that favor you. </div>";
			echo "<div>Heroes you might favor: Stealth Assassin, Nerubian Assassin, Venomancer, Spiritbreaker, Beastmaster, Vengeful Spirit. </div>";
		}
		
		if($support>$carry && $support>$ganker && $support>$intiator)
		{
			echo "<div>You are a support player. You tend to be the one buying wards to be on the watch for your team. You can babysit the carry. Most of the time, you'll find yourself staying back and supporting the team from a distance. </div>";
			echo "<div>Heroes you might favor: Chen, Zeus, Warlock, Ezalor, Crystal Maiden, Dazzle. </div>";
		}
		
		if($initiator>$carry && $initiator>$ganker && $initiator>$support)
		{
			echo "<div>You are an initiator player. You are the type who will charge into groups of enemies and luring their attacks while your allies attack from behind. You won't find yourself dying anytime soon. </div>";
			echo "<div>Heroes you might favor: Axe, Centaur, Bristleback, Doombringer, Sand King, Pandaren Brewmaster. </div>";
		}
		
		?>
		<img class="footer" src="footer.jpg" />
		
	</body>
	
</html>