<?php

namespace application\models;

use application\core\Model;
use Imagick;

class Admin extends Model {

	public $error;

	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$descriptionLen = iconv_strlen($post['description']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($descriptionLen < 3 or $descriptionLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		/*if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
			$this->error = 'Изображение не выбрано';
			return false;
		} */
		return true;
	}

	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'indication' => $post['indication'],
			'contraindications' => $post['contraindications'],
			'composition' => $post['composition'],
			'application' => $post['application'],
			'spec_instructions' => $post['spec_instructions'],
			'category' => $post['category'],
			'price' => $post['price'],
		];
		$this->db->query('INSERT INTO products VALUES (:id, :name, :indication, :contraindications,
		 :composition, :application, :spec_instructions, :category, :price)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'indication' => $post['indication'],
			'contraindications' => $post['contraindications'],
			'composition' => $post['composition'],
			'application' => $post['application'],
			'spec_instructions' => $post['spec_instructions'],
			'price' => $post['price'],
		];
		$this->db->query('UPDATE products SET name = :name, indication = :indication, contraindications = :contraindications,
		 composition = :composition, application = :application, spec_instructions = :spec_instructions,
		 price = :price WHERE id = :id', $params);
	}

	public function postUploadImage($path, $id) {
		$img = new Imagick($path);
		$img->cropThumbnailImage(600, 500);
		$img->setImageCompressionQuality(80);
		$img->writeImage($_SERVER['DOCUMENT_ROOT'] . '/public/materials/'.$id.'.jpg');
	}

	public function isPostExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM products WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM posts WHERE id = :id', $params);
		//unlink('public/materials/'.$id.'.jpg');
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM products WHERE id = :id', $params);
	}

}