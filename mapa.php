<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>KOM geoportal</title>
	<meta name="description" content="strona internetowa wykonaa na potrzeby zajęć z przedmiotu Programowanie systemów geoprzestrzennych">
	<meta name="keywords" content=" analizy terenu, ocena terenu, wojsko, pchory, geografia wojskowa">
	<meta name="author" content="Dominik Szymczak">
	
	<meta http-equiv="X-Ua-Compatible" content="IE-edge,chrome=1">
	
	<link rel="stylesheet" href="mapa.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
  integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
  integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
  crossorigin=""></script>
	
</head>
<body>
	<header>
		<div id="logotyp">
			<h1 class="logo"><span style="color:#2a5daf;">ATE</span> Geoportal</h1>
		</div>
	</header>
	<!--tutaj jest pasek nawigacji-->
	<nav>
		<ul class="menu">
			<li><a href="#">Strona główna</a></li>
			<li><a href="#">O projekcie</a></li>
			<li><a href="#">Mapa</a></li>
			<li><a href="#">Kontakt</a></li>
		</ul>
	</nav>
	
	<!--tutaj jest blok z mapą i blok z opisem-->
	<div id="mymap"></div>	
   
   
   
   
   
    <script src="./jquery-3.3.1.min.js"></script>
     <script src="./mapa.js"></script>
    

</body>
</html>
