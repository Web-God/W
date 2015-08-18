<?php

	//autochargement des classes
	require("../vendor/autoload.php");

	//configuration
	require("../app/config.php");

	//rares fonctions globales
	require("../W/globals.php");

	//Fonctions time et print_r
	require("../app/functions.php");

	//instancie notre appli en lui passant la config et les routes
	$app = new W\App($w_routes, $w_config);

	//exécute l'appli
	$app->run();