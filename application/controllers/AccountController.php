<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	

	public function aboutAction() {
		//$this->view->redirect('/');
		$this->view->redirect('../application/views/layouts/about.html');
		//$this->view->redirect('https://google.com');
		//$this->view->render('Вход');
		//$this->view->layout = 'about';
	}

	public function phpgdAction() {
		//$this->view->layout = 'custom';
		$this->view->render('GD');
	}

}

?>