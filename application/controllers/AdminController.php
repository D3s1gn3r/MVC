<?php

	namespace application\controllers;

	use application\core\Controller;

	class AdminController extends Controller {

		public function loginAction(){
			$this->view->render('Login page');
		}

	}


?>