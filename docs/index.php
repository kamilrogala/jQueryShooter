<?
	$description = "Wchodzisz na własną odpowiedzialność. Nie odpowiadam za straty na psychice.";
	$title = "Kamil Rogala- Front End Developer. Poligon, eksperymenty i zło wszelakie";
	$keywords = ",poligon,eksperymenty"
?>
	<!DOCTYPE html>
	<html lang="pl" dir="ltr">

	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<? echo $_SERVER['SCRIPT_URI']; ?>">
		<meta property="og:title" content="<? echo $title ?>">
		<meta property="og:image" content="http://poligon.kamilrogala.it/images/fb_logo_big.jpg">
		<meta property="og:description" content="<? echo $description?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<base href="<? echo $_SERVER['SCRIPT_URI']; ?>">
		<meta charset="utf-8">
		<meta name="keywords" content="Kamil Rogala,programowanie,strony internetowe,WWW,frontend,frontend developer,HTML,HTML5,CSS,CSS3,javascript,jQuery,responsive web design,RWD,webdeveloper<? echo $keywords ?>">
		<meta name="rights" content="Kamil Rogala, kamil@kamilrogala.it">
		<meta name="description" content="<? echo $description ?>" />
		<title>
			<? echo $title ?>
		</title>
		<link rel="shortcut icon" href="http://poligon.kamilrogala.it/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="http://poligon.kamilrogala.it/images/favicon.ico" type="image/x-icon">
		<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>
		<link href="<? echo $_SERVER['SCRIPT_URI']; ?>css/template.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div class="wrapper">
			<div class="game-window">
				<div class="game-bg">
					<div class="grass grass-1"></div>
					<div class="grass grass-2"></div>
					<div class="grass grass-3"></div>
					<div class="grass grass-4"></div>
					<div class="grass grass-5"></div>
				</div>
				<div class="tree tree-1">
					<div class="monster monster-1">
						<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
					</div>
				</div>
				<div class="tree tree-2"></div>
				<div class="tree tree-3">
					<div class="monster monster-2">
						<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
					</div>
				</div>
				<div class="bush bush-1"></div>
				<div class="bush bush-2">
					<div class="monster monster-3">
						<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
					</div>
				</div>
				<div class="bush bush-3"></div>
				<div class="stone stone-1">
					<div class="monster monster-4">
						<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
					</div>
				</div>
				<div class="stone stone-2"></div>
				<div class="stone stone-3">
					<div class="monster monster-5">
						<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
					</div>
				</div>
				<div class="freewalker monster monster-6">
					<img src="<? echo $_SERVER['SCRIPT_URI']; ?>img/monster.png" alt="monster">
				</div>
			</div>
			<div class="score">
				<p>Twoje punkty:</p>
				<p class="points">0</p>
			</div>
			<div class="aim"></div>
		</div>
		<div class="author">
			<p>&copy <a href="kamilrogala.it" target="_self" title="Kamil Rogala- Front End Developer. Strona poświęcona programowaniu, front end'owi i szeroko rozumianemu tworzeniu stron internetowych">KamilRogala.IT</a></p>
			<p>autor: Kamil Rogala, 2017-<? echo date('Y');?>.</p>
			<?
			//a potem.... 
			//https://priabudiman.itch.io/trainfarming-spriteset
			//https://raventale.itch.io/
			//https://onemanarmydev.itch.io/
			?>
			
		</div>
		<script src="<? echo $_SERVER['SCRIPT_URI']; ?>/assets/index.js"></script>
	</body>

	</html>
