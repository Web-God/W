<?php 
	$siteTitle = "Framework W";
	$titleCopy = "Webforce3";
	//$currentYear = date("Y");
	$currentYear = date("Y-m-d H:i:s",time());
	$maDevise = "Quand tout a échoué lisez la Notice";
 ?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>
		<nav>
			<ul>
				<li>
				<a href="<?php echo $this->url('home'); ?>">Accueil</a>
				</li>
				<li>
				<a href="<?php echo $this->url('contact'); ?>">Contactez-nous</a>
				</li>
				<li>
				<a href="<?php echo $this->url('about'); ?>">A propos</a>
				</li>
			</ul>				
		</nav>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>&copy;<?php echo $titleCopy." ". convertDateToFrench($currentYear) ?><?php echo " - " .$siteTitle ?>
			<details>
				<summary>Denis Godec</summary>
			</details>
		</footer>
	</div>
</body>
</html>