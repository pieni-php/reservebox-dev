<?php
return [
	'fallback' => 'crud',
	'table' => 'reservation',
	'id_expr' => '`reservation_id`',
	'name_expr' => '`reservation_from`',
	'join_tables' => [
'NATURAL JOIN `resource`',
	],
	'columns' => [
		'resource_id' => [
			'data_type' => PDO::PARAM_INT,
		],
		'resource_name' => [
			'data_type' => PDO::PARAM_STR,
		],
		'reservation_from' => [
			'data_type' => PDO::PARAM_INT,
		],
	],
	'actions' => [
		'child_of' => [
			'columns' => [
				'resource_id',
				'resource_name',
				'reservation_from',
			],
		],
		'add_child_of_affect' => [
			'columns' => [
				'reservation_from',
			],
		],
		'view' => [
			'columns' => [
				'resource_id',
				'resource_name',
				'reservation_from',
			],
		],
		'edit' => [
			'columns' => [
				'resource_id',
				'resource_name',
				'reservation_from',
			],
		],
		'edit_affect' => [
			'columns' => [
				'reservation_from',
			],
		],
		'delete' => [
			'columns' => [
				'resource_id',
				'resource_name',
				'reservation_from',
			],
		],
	],
];
