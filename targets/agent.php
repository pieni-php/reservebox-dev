<?php
return [
	'fallback' => 'crud',
	'table' => 'agent',
	'id_expr' => '`agent_id`',
	'name_expr' => '`agent_name`',
	'columns' => [
		'agent_id' => [
			'data_type' => PDO::PARAM_INT,
		],
		'agent_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'actions' => [
		'index' => [
			'columns' => [
				'agent_id',
				'agent_name',
			],
		],
		'view' => [
			'columns' => [
				'agent_id',
				'agent_name',
			],
		],
		'edit' => [
			'columns' => [
				'agent_id',
				'agent_name',
			],
		],
		'edit_affect' => [
			'columns' => [
				'agent_name',
			],
		],
	],
];
