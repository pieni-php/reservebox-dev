<?php
return [
	'fallback' => 'crud',
	'table' => 'vendor',
	'id_expr' => '`vendor_id`',
	'name_expr' => '`vendor_name`',
	'columns' => [
		'vendor_id' => [
			'data_type' => PDO::PARAM_INT,
		],
		'vendor_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'actions' => [
		'index' => [
			'columns' => [
				'vendor_id',
				'vendor_name',
			],
		],
		'view' => [
			'columns' => [
				'vendor_id',
				'vendor_name',
			],
		],
		'edit' => [
			'columns' => [
				'vendor_id',
				'vendor_name',
			],
		],
		'edit_affect' => [
			'columns' => [
				'vendor_name',
			],
		],
	],
];
