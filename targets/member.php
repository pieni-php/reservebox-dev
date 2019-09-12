<?php
return [
	'fallback' => 'crud',
	'table' => 'member',
	'id_expr' => '`member_id`',
	'name_expr' => '`member_name`',
	'columns' => [
		'member_id' => [
			'data_type' => PDO::PARAM_INT,
		],
		'member_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'actions' => [
		'index' => [
			'columns' => [
				'member_id',
				'member_name',
			],
		],
		'view' => [
			'columns' => [
				'member_id',
				'member_name',
			],
		],
		'edit' => [
			'columns' => [
				'member_id',
				'member_name',
			],
		],
		'edit_affect' => [
			'columns' => [
				'member_name',
			],
		],
	],
];
