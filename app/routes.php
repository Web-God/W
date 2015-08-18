<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contactez-nous/', 'Default#contact', 'contact'],
		['GET|POST', '/a-propos/', 'Default#about', 'about'],
	);