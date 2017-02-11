<!-- Vincent Chen -->
<! DOCTYPE HTML>

<html>
	<head>
		<title>Item Builds</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript">
		
		window.onload = function setItem()
		{
		aegis = document.getElementById('aegis');
		}
		
		function getName(s) 
			{
			var d = s.lastIndexOf('.');
			return s.substring(s.lastIndexOf('/') + 1, d < 0 ? s.length : d);
			}
		
		function getItem(item)
		{
			empty1=getName(document.getElementById('item1').src);
			empty2=getName(document.getElementById('item2').src);
			empty3=getName(document.getElementById('item3').src);
			empty4=getName(document.getElementById('item4').src);
			empty5=getName(document.getElementById('item5').src);
			empty6=getName(document.getElementById('item6').src);
			if(empty1=="blank")
			{
			document.getElementById('item1').src="items/"+item+".jpg";
			document.getElementById('i1').value=item;
			}
			else
			if(empty2=="blank")
			{
			document.getElementById('item2').src="items/"+item+".jpg";
			document.getElementById('i2').value=item;
			}
			else
			if(empty3=="blank")
			{
			document.getElementById('item3').src="items/"+item+".jpg";
			document.getElementById('i3').value=item;
			}
			else
			if(empty4=="blank")
			{
			document.getElementById('item4').src="items/"+item+".jpg";
			document.getElementById('i4').value=item;
			}
			else
			if(empty5=="blank")
			{
			document.getElementById('item5').src="items/"+item+".jpg";
			document.getElementById('i5').value=item;
			}
			else
			if(empty6=="blank")
			{
			document.getElementById('item6').src="items/"+item+".jpg";
			document.getElementById('i6').value=item;
			}
			else
			{
			alert("You must clear an inventory space.")
			}
		}
		
		</script>
	</head>
	
	<body>
		<img class="header" src="header.jpg" />
		<form action="redirect.php" method="post">
		<div style="margin-left:20%;float:left">Protectorate</div>
		<div style="margin-left:10%">Arcane Sanctum</div>
		<img id="aegis" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/aegis.jpg" onclick="getItem('aegis');" />
		<img id="heart" src="http://localhost/New%20folder/vincentchen/items/heart.jpg" onclick="getItem('heart');" />
		<img id="bkb" src="http://localhost/New%20folder/vincentchen/items/bkb.jpg" onclick="getItem('bkb');" />
		<img id="assault" src="http://localhost/New%20folder/vincentchen/items/assault.jpg" onclick="getItem('assault');" />
		<img id="shiva" src="http://localhost/New%20folder/vincentchen/items/shiva.jpg" onclick="getItem('shiva');" />
		<img id="linken" src="http://localhost/New%20folder/vincentchen/items/linken.jpg" onclick="getItem('linken');" />
		<img id="guinsoo" style="margin-left:15%" src="http://localhost/New%20folder/vincentchen/items/guinsoo.jpg" onclick="getItem('guinsoo');" />
		<img id="orchid" src="http://localhost/New%20folder/vincentchen/items/orchid.jpg" onclick="getItem('orchid');" />
		<img id="eul" src="http://localhost/New%20folder/vincentchen/items/eul.jpg" onclick="getItem('eul');" />
		<img id="force" src="http://localhost/New%20folder/vincentchen/items/force.jpg" onclick="getItem('force');" />
		<img id="dagon" src="http://localhost/New%20folder/vincentchen/items/dagon.jpg" onclick="getItem('dagon');" />
		<img id="necro" src="http://localhost/New%20folder/vincentchen/items/necro.jpg" onclick="getItem('necro');" />

		<br />
		
		<img id="vanguard" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/vanguard.jpg" onclick="getItem('vanguard');" />
		<img id="blademail" src="http://localhost/New%20folder/vincentchen/items/blademail.jpg" onclick="getItem('blademail');" />
		<img id="soulbooster" src="http://localhost/New%20folder/vincentchen/items/soulbooster.jpg" onclick="getItem('soulbooster');" />
		<img id="hood" src="http://localhost/New%20folder/vincentchen/items/hood.jpg" onclick="getItem('hood');" />
		<img id="aghanim" style="margin-left:22%" src="http://localhost/New%20folder/vincentchen/items/aghanim.jpg" onclick="getItem('aghanim');" />
		<img id="refresher" src="http://localhost/New%20folder/vincentchen/items/refresher.jpg" onclick="getItem('refresher');" />
		
		<br />
		<br />
		
		<div style="margin-left:20%;float:left">Ancient Weaponry</div>
		<div style="left:5%">Supportive Vestments</div>
		<img id="rapier" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/rapier.jpg" onclick="getItem('rapier');" />
		<img id="mkb" src="http://localhost/New%20folder/vincentchen/items/mkb.jpg" onclick="getItem('mkb');" />
		<img id="radiance" src="http://localhost/New%20folder/vincentchen/items/radiance.jpg" onclick="getItem('radiance');" />
		<img id="bfly" src="http://localhost/New%20folder/vincentchen/items/bfly.jpg" onclick="getItem('bfly');" />
		<img id="buriza" src="http://localhost/New%20folder/vincentchen/items/buriza.jpg" onclick="getItem('buriza');" />
		<img id="bashers" src="http://localhost/New%20folder/vincentchen/items/bashers.jpg" onclick="getItem('bashers');" />
		<img id="pipe" style="margin-left:15%" src="http://localhost/New%20folder/vincentchen/items/pipe.jpg" onclick="getItem('pipe');" />
		<img id="mek" src="http://localhost/New%20folder/vincentchen/items/mek.jpg" onclick="getItem('mek');" />
		<img id="vlad" src="http://localhost/New%20folder/vincentchen/items/vlad.jpg" onclick="getItem('vlad');" />
		<img id="arcaneb" src="http://localhost/New%20folder/vincentchen/items/arcaneb.jpg" onclick="getItem('arcaneb');" />
		<img id="buckler" src="http://localhost/New%20folder/vincentchen/items/buckler.jpg" onclick="getItem('buckler');" />
		<img id="rob" src="http://localhost/New%20folder/vincentchen/items/rob.jpg" onclick="getItem('rob');" />
		<br />
		<img id="bfury" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/bfury.jpg" onclick="getItem('bfury');" />
		<img id="manta" src="http://localhost/New%20folder/vincentchen/items/manta.jpg" onclick="getItem('manta');" />
		<img id="crystalys" src="http://localhost/New%20folder/vincentchen/items/crystalys.jpg" onclick="getItem('crystalys');" />
		<img id="armlet" src="http://localhost/New%20folder/vincentchen/items/armlet.jpg" onclick="getItem('armlet');" />
		<img id="lothars" src="http://localhost/New%20folder/vincentchen/items/lothars.jpg" onclick="getItem('lothars');" />
		<img id="ethereal" src="http://localhost/New%20folder/vincentchen/items/ethereal.jpg" onclick="getItem('ethereal');" />
		<img id="medallion" style="margin-left:15%" src="http://localhost/New%20folder/vincentchen/items/medallion.jpg" onclick="getItem('medallion');" />
		<img id="drum" src="http://localhost/New%20folder/vincentchen/items/drum.jpg" onclick="getItem('drum');" />
		<img id="urn" src="http://localhost/New%20folder/vincentchen/items/urn.jpg" onclick="getItem('urn');" />
		<img id="headdress" src="http://localhost/New%20folder/vincentchen/items/headdress.jpg" onclick="getItem('headdress');" />
		
		<br />
		<br />
		
		<div style="margin-left:20%;float:left">Enchanted Artifacts</div>
		<div style="left:5%">Gateway Relics</div>
		<img id="sny" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/sny.jpg" onclick="getItem('sny');" />
		<img id="satanic" src="http://localhost/New%20folder/vincentchen/items/satanic.jpg" onclick="getItem('satanic');" />
		<img id="mjollnir" src="http://localhost/New%20folder/vincentchen/items/mjollnir.jpg" onclick="getItem('mjollnir');" />
		<img id="skadi" src="http://localhost/New%20folder/vincentchen/items/skadi.jpg" onclick="getItem('skadi');" />
		<img id="sange" src="http://localhost/New%20folder/vincentchen/items/sange.jpg" onclick="getItem('sange');" />
		<img id="helm" src="http://localhost/New%20folder/vincentchen/items/helm.jpg" onclick="getItem('helm');" />
		<img id="bot" style="margin-left:15%" src="http://localhost/New%20folder/vincentchen/items/bot.jpg" onclick="getItem('bot');" />
		<img id="phase" src="http://localhost/New%20folder/vincentchen/items/phase.jpg" onclick="getItem('phase');" />
		<img id="treads" src="http://localhost/New%20folder/vincentchen/items/treads.jpg" onclick="getItem('treads');" />
		<img id="soulring" src="http://localhost/New%20folder/vincentchen/items/soulring.jpg" onclick="getItem('soulring');" />
		<img id="midas" src="http://localhost/New%20folder/vincentchen/items/midas.jpg" onclick="getItem('midas');" />
		<img id="oblivion" src="http://localhost/New%20folder/vincentchen/items/oblivion.jpg" onclick="getItem('oblivion');" />
		<br />
		<img id="maelstrom" style="margin-left:20%" src="http://localhost/New%20folder/vincentchen/items/maelstrom.jpg" onclick="getItem('maelstrom');" />
		<img id="desolator" src="http://localhost/New%20folder/vincentchen/items/desolator.jpg" onclick="getItem('desolator');" />
		<img id="yasha" src="http://localhost/New%20folder/vincentchen/items/yasha.jpg" onclick="getItem('yasha');" />
		<img id="mask" src="http://localhost/New%20folder/vincentchen/items/mask.jpg" onclick="getItem('mask');" />
		<img id="diffusal" src="http://localhost/New%20folder/vincentchen/items/diffusal.jpg" onclick="getItem('diffusal');" />
		<img id="perseverance" style="margin-left:19%" src="http://localhost/New%20folder/vincentchen/items/perseverance.jpg" onclick="getItem('perseverance');" />
		<img id="poorman" src="http://localhost/New%20folder/vincentchen/items/poorman.jpg" onclick="getItem('poorman');" />
		<img id="bracers" src="http://localhost/New%20folder/vincentchen/items/bracers.jpg" onclick="getItem('bracers');" />
		<img id="wraith" src="http://localhost/New%20folder/vincentchen/items/wraith.jpg" onclick="getItem('wraith');" />
		<img id="null" src="http://localhost/New%20folder/vincentchen/items/null.jpg" onclick="getItem('null');" />
		<img id="wand" src="http://localhost/New%20folder/vincentchen/items/wand.jpg" onclick="getItem('wand');" />
		
		<br />
		<br />
		<br />
		<div> Build Name </div>
		<input style="margin-left:auto;margin-right:auto;display:block" type="text" value="Build Name" name="build" />
		<br />
		<br />
		<img value="blank" id="item1" style="margin-left:38%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onmousedown="document.getElementById('item1').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i1').value='blank';" />
		<img value="blank" id="item2" style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onclick="document.getElementById('item2').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i2').value='blank';" />
		<img value="blank" id="item3" style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onclick="document.getElementById('item3').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i3').value='blank';" />
		<img value="blank" id="item4" style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onclick="document.getElementById('item4').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i4').value='blank';" />
		<img value="blank" id="item5" style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onclick="document.getElementById('item5').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i5').value='blank';" />
		<img value="blank" id="item6" style="margin-left:1%" src="http://localhost/New%20folder/vincentchen/items/blank.jpg" onclick="document.getElementById('item6').src='http://localhost/New%20folder/vincentchen/items/blank.jpg';document.getElementById('i6').value='blank';" />
		<input value="blank" id="i1" name="item1" type="hidden" />
		<input value="blank" id="i2" name="item2" type="hidden" />
		<input value="blank" id="i3" name="item3" type="hidden" />
		<input value="blank" id="i4" name="item4" type="hidden" />
		<input value="blank" id="i5" name="item5" type="hidden" />
		<input value="blank" id="i6" name="item6" type="hidden" />
		<br />
		<br />
		<textarea name="comment" style="margin-left:auto;margin-right:auto;display:block;height:100px" size="200px"> </textarea>
		<input type="submit" style="margin-left:auto;margin-right:auto;display:block" value="Complete!" />
		</form>
		<img class="footer" src="footer.jpg" />
		<a href="content.html"> Return to Content </a>
	</body>
	
</html>