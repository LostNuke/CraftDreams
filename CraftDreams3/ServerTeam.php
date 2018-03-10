<html>
	<head>
		<title>ServerTeam</title>
		
		<meta charset="utf-8"/>
		
		<link rel="stylesheet" href="CSS/default.css"/>
		<link rel="stylesheet" href="CSS/serverteam.css"/>
		
		<script type="text/javascript" src="script/js/JQuery.js"></script>
		<script type="text/javascript" src="script/js/PageApi.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$.loadPage("#content", "page/startseite/serverteam.php", "ServerTeam");
			});
		</script>
	</head>
	
	<body>
		<div id="header">
			<a href="#" class="button" id="btn_start">Start</a>
			<p class="quadrat">■</p>
			
			<a href="#" class="button" id="btn_aboutus">Über uns</a>
			<p class="quadrat">■</p>
			
			<a href="#" class="button" id="btn_forum">Forum</a>
			<p class="quadrat">■</p>
			
			<a href="#" class="button" id="btn_serverteam">Server-Team</a>
		</div>
		<div id="content" >
			<p id="st-header" class="title">ServerTeam</p>
			<p id="admin-header" class="title">Admins:</p>
			<ul id="admins" class="st-ul">
				<span id="admin-hover1" class="text-hover">CraftingDev</span>
				<li id="admin-list" class="st-list"><img src="img/ServerTeam/CraftingDev.png" id="admin1" class="st-icons"></li>
				<p id="admin-hover2" class="text-hover">MysterySixxx</p>
				<li id="admin-list" class="st-list"><img src="img/ServerTeam/MysterySixxx.png" id="admin2" class="st-icons"></li>
				<p id="admin-hover3" class="text-hover">GameMaster</p>
				<li id="admin-list" class="st-list"><img src="img/ServerTeam/Gamemaster.png" id="admin3" class="st-icons"></li>
			</ul>
			<p id="dev-header" class="title">Developer:</p>
			<ul id="developer" class="st-ul">
				<p id="dev-hover1" class="text-hover">???</p>
				<li id="dev-list" class="st-list"><img src="img/ServerTeam/missing.png" id="dev1" class="st-icons"></li>
				<p id="dev-hover2" class="text-hover">???</p>
				<li id="dev-list" class="st-list"><img src="img/ServerTeam/missing.png" id="dev2" class="st-icons"></li>
			</ul>
			<p id="mod-header" class="title">Moderator:</p>
			<ul id="moderator" class="st-ul">
				<p id="mod-hover1" class="text-hover">Destxyer</p>
				<li id="mod-list" class="st-list"><img src="img/ServerTeam/Destrxyer.png" id="mod1" class="st-icons"></li>
				<p id="mod-hover2" class="text-hover">???</p>
				<li id="mod-list" class="st-list"><img src="img/ServerTeam/missing.png" id="mod2" class="st-icons"></li>
				<p id="mod-hover3" class="text-hover">???</p>
				<li id="mod-list" class="st-list"><img src="img/ServerTeam/missing.png" id="mod3" class="st-icons"></li>
			</ul>
			<p id="sup-header" class="title">Supporter:</p>
			<ul id="superator" class="st-ul">
				<p id="sup-hover1" class="text-hover">???</p>
				<li id="sup-list" class="st-list"><img src="img/ServerTeam/missing.png" id="sup1" class="st-icons"></li>
				<p id="sup-hover2" class="text-hover">???</p>
				<li id="sup-list" class="st-list"><img src="img/ServerTeam/missing.png" id="sup2" class="st-icons"></li>
				<p id="sup-hover3" class="text-hover">???</p>
				<li id="sup-list" class="st-list"><img src="img/ServerTeam/missing.png" id="sup3" class="st-icons"></li>
			</ul>
			<p id="builder-header" class="title">Builder:</p>
			<ul id="buildererator" class="st-ul">
				<p id="builder-hover1" class="text-hover">???</p>
				<li id="builder-list" class="st-list"><img src="img/ServerTeam/missing.png" id="builder1" class="st-icons"></li>
				<p id="builder-hover2" class="text-hover">???</p>
				<li id="builder-list" class="st-list"><img src="img/ServerTeam/missing.png" id="builder2" class="st-icons"></li>
				<p id="builder-hover3" class="text-hover">???</p>
				<li id="builder-list" class="st-list"><img src="img/ServerTeam/missing.png" id="builder3" class="st-icons"></li>
			</ul>
			<p id="designer-header" class="title">Designer:</p>
			<ul id="designererator" class="st-ul">
				<p id="designer-hover1" class="text-hover">???</p>
				<li id="designer-list" class="st-list"><img src="img/ServerTeam/missing.png" id="designer1" class="st-icons"></li>
				<p id="designer-hover2" class="text-hover">???</p>
				<li id="designer-list" class="st-list"><img src="img/ServerTeam/missing.png" id="designer2" class="st-icons"></li>
				<p id="designer-hover3" class="text-hover">???</p>
				<li id="designer-list" class="st-list"><img src="img/ServerTeam/missing.png" id="designer3" class="st-icons"></li>
			</ul>
		
		</div>
		<div id="footer">
			
			 <ul id="footer-icon-list">
  				<li id="footer-list"><img src="img/FooterIcons/teamspeak.png" id="footer-icons"></li>
  				<li id="footer-list"><img src="img/FooterIcons/discord.png" id="footer-icons"></li>
  				<li id="footer-list"><img src="img/FooterIcons/impressum.png" id="footer-icons"></li>
  				<li id="footer-list"><img src="img/FooterIcons/Twitter.png" id="footer-icons"></li>
  				<li id="footer-list"><img src="img/FooterIcons/bewerbung.png" id="footer-icons"></li>
			 </ul>
			 <ul id="footer-items-list">
			 	<li id=footer-item>
			 		<p id="footer-items">Copyright &copy; 2018 CraftDreams.de</p>
			 		<p id="footer-items" class="credit">Webdesign + Programmierung: </p> <a href="https://discord.gg/mAWFQs6" class="credit">PolygonDev</a>
			 			
			 	</li>
			 	<li id=footer-item></li>
			 </ul>
		</div>
	</body>
	
	
</html>