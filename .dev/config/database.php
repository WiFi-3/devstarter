<?php defined( 'SYSPATH' ) OR die( 'No direct access allowed.' );

return array(
	'default' => array(
		'type' => 'MySQLi',
		'connection' => array(
			'hostname' => 'localhost',
			'database' => 'app',
			'username' => 'root',
			'password' => 'password',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset' => 'utf8mb4',
		'caching' => FALSE,
	),
);
