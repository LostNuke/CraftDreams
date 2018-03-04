<html>
	<head>
		<title>Startseite</title>
		
		<meta charset="utf-8"/>
		
		<link rel="stylesheet" href="CSS/default.css"/>
		<link rel="stylesheet" href="CSS/startseite.css"/>
		
		<script type="text/javascript" src="script/js/JQuery.js"></script>
		<script type="text/javascript" src="script/js/PageApi.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$.loadPage("#content", "page/startseite/index.php", "Startseite");
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
		<div id="content"><!-- page (javascript) --></div>
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