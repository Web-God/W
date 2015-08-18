<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		['GET|POST', '/contactez-nous/', 'Default#contact', 'contact'],
		['GET', '/a-propos/', 'Default#about', 'about'],
		['GET', '/details/[i:id]/[a:slug]/', 'Default#details', 'details'],
	);