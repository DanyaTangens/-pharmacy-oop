<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'cart' => [
		'controller' => 'main',
		'action' => 'cart',
	],
	'product/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'product',
	],
	// AccountController
	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
	'account/profile' => [
		'controller' => 'account',
		'action' => 'profile',
	],
	'account/personal' => [
		'controller' => 'account',
		'action' => 'personal',
	],
	'account/activeorders' => [
		'controller' => 'account',
		'action' => 'activeorders',
	],
	'account/orders' => [
		'controller' => 'account',
		'action' => 'orders',
	],
	'account/logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],
	// AdminController
	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
];