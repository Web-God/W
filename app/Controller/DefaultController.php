<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
		/**
	 * Page contactez-nous
	 */
	public function contact()
	{
		$this->show('default/contact');
	}
		public function about()
	{
		$this->show('default/about');
	}


}