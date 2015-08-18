<!DOCTYPE html>
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

		<footer>
		</footer>
	</div>
</body>
</html>