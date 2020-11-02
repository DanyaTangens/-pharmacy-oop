<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}

	public function loginValidate($post) {
		$phoneLen = iconv_strlen($post['phone']);
		if ($phoneLen != 11) {
			$this->error = 'Некорректный номер телефона';
			return false;
		}
		return true;
	}

	public function registerValidate($post) {
		$phoneLen = iconv_strlen($post['phone']);
		if ($phoneLen != 11) {
			$this->error = 'Некорректный номер телефона';
			return false;
		}
		return true;
	}

	public function checkNameExists($name) {
		$params = [
			'name' => $name,
		];
		if ($this->db->column('SELECT id FROM accounts WHERE name = :name', $params)) {
            $this->error = 'Это имя уже используется';
			return false;
        }
        return true;
	}
	
	public function userCount($post) {
		$params = [
			'login' => $post['phone'],
		];
		return $this->db->column('SELECT COUNT(:login) FROM accounts', $params);
	}

	public function userInfo($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT * FROM accounts WHERE id = :id', $params);
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function checkPhoneExists($login) {
		$params = [
			'login' => $login,
		];
		if ($this->db->column('SELECT id FROM accounts WHERE login = :login', $params)) {
            $this->error = 'Этот телефон уже используется';
			return false;
        }
        return true;
	}

	public function login($login) {
		$params = [
			'login' => $login,
		];
		$data = $this->db->row('SELECT * FROM accounts WHERE login = :login', $params);
		$_SESSION['authorize'] = $data[0];
	}

	public function register($login) {
		$params = [
			'id' => '',
			'login' => $login,
			'name' => '',
			'email' => '',
			'role' => '1',
		];
		$this->db->query('INSERT INTO accounts VALUES (:id, :login, :name, :email, :role)', $params);
	}

	public function productList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM products ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function cartList($cartsId) {
		$list = '(';
		if(!empty($cartsId)){
			foreach($cartsId as $id){
				$list .= '\''.$id.'\',';
			}
			$list = substr_replace($list, ')', strrpos($list, ','));
			$params = [
				'list' => $list,
			];
			return $this->db->row('SELECT id, name, price FROM products WHERE id IN'.$list.'');
		} 
	}

	public function postsAccountList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}
}