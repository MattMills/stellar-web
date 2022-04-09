<?php
	$titles['home']  = 'Home';
	$titles['saves'] = 'Save Editor';
	$titles['mods']  = 'Mod Database';
	$titles['code']	 = 'Code Search';
	$titles['about'] = 'About';

	if(!isset($this_page)){
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>StellarStellaris - <?=$titles[$this_page]?></title>
	<meta name="viewport" content="width=device-width">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
			        <span class="fs-4">StellarStellaris</span>
			</a>
			<ul class="nav nav-pills">
				<li class="nav-item"><a href="//dev.stellarstellaris.com/" class="nav-link <?= ($this_page == 'home')  ? 'active' : ''?>" aria-current="page">Home</a></li>
				<li class="nav-item"><a href="//mods.dev.stellarstellaris.com/" class="nav-link <?= ($this_page == 'mods')  ? 'active' : ''?>" aria-current="page">Mod DB</a></li>
				<li class="nav-item"><a href="//saves.dev.stellarstellaris.com/" class="nav-link <?= ($this_page == 'saves')  ? 'active' : ''?>">Save Editor</a></li>
				<li class="nav-item"><a href="#" class="nav-link disabled">Code search</a></li>
				<li class="nav-item"><a href="https://github.com/MattMills/stellarstellaris" class="nav-link">Github</a></li>
				<li class="nav-item"><a href="#" class="nav-link disabled <?= ($this_page == 'about')  ? 'active' : ''?>">About</a></li>
			</ul>
		</header>

	</div>
