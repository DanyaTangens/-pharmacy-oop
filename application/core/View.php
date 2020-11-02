<?php

namespace application\core;

class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route) {
		$this->route = $route;
		$this->path = $route['controller'].'/'.$route['action'];
	}

	//функция рендер встает в теле body у шаблона. Помимо $content можно еще кучу разного вставлять
	public function render($title, $vars = []) {
		extract($vars);
		//debug($this->path);
		//вид который будет отображаться в теле body шаблона
		$path = 'application/views/'.$this->path.'.php';
		if (file_exists($path)) {
			//помещаем все в буфер, а после в default layout как строковую переменную отмечает и все класс
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}
	}

	public function redirect($url) {
		header('location: /'.$url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if (file_exists($path)) {
			require $path;
		}
		exit;
	}

	public function message($status, $message) {
		exit(json_encode(['status' => $status, 'message' => $message]));
	}

	public function location($url) {
		exit(json_encode(['url' => $url]));
	}

}	