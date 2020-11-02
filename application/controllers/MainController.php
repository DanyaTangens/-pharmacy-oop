<?php

namespace application\controllers;
use application\core\Controller;
use application\lib\Pagination;
use application\models\Admin;
use application\models\Account;

class MainController extends Controller {

	public function indexAction() {
		$pagination = new Pagination($this->route, $this->model->postsCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->productList($this->route),
		];
		$this->view->render('Главная страница', $vars);
	}

	public function aboutAction() {
		$this->view->render('Обо мне');
	}

	public function cartAction(){
		//debug($_SESSION['cart']);
		$vars = [
			'list' => $this->model->cartList($_SESSION['cart']),
		];
		$this->view->render('Корзина', $vars);
	}

	public function logoutAction() {
		unset($_SESSION['authorize']);
		$this->view->redirect('login');
	}

	public function contactAction() {
		if (!empty($_POST)) {
			if (!$this->model->contactValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			mail('titef@p33.org', 'Сообщение из блога', $_POST['name'].'|'.$_POST['email'].'|'.$_POST['text']);
			$this->view->message('success', 'Сообщение отправлено Администратору');
		}
		$this->view->render('Контакты');
	}

	public function productAction() {
		if (!empty($_POST)) {
			if(!in_array($_POST['id'],$_SESSION['cart'])){
				$_SESSION['cart'][] = $_POST['id'];
			}
		}
		$adminModel = new Admin;
		if (!$adminModel->isPostExists($this->route['id'])) {
			$this->view->errorCode(404);
		}
		$vars = [
			'data' => $adminModel->postData($this->route['id'])[0],
		];
		$this->view->render('Аптека360', $vars);
	}

}