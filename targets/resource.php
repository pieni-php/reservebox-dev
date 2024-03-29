<?php
return [
	'fallback' => 'crud',
	'table' => 'resource',
	'id_expr' => '`resource_id`',
	'name_expr' => '`resource_name`',
	'join_tables' => [
		'NATURAL JOIN `agent`',
	],
	'has_children' => [
		'reservation',
	],
	'columns' => [
		'agent_id' => [
			'data_type' => PDO::PARAM_INT,
		],
		'agent_name' => [
			'data_type' => PDO::PARAM_STR,
		],
		'resource_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'actions' => [
		'child_of' => [
			'columns' => [
				'agent_id',
				'agent_name',
				'resource_name',
			],
		],
		'add_child_of_affect' => [
			'columns' => [
				'resource_name',
			],
		],
		'view' => [
			'columns' => [
				'agent_id',
				'agent_name',
				'resource_name',
			],
		],
		'edit' => [
			'columns' => [
				'agent_id',
				'agent_name',
				'resource_name',
			],
		],
		'edit_affect' => [
			'columns' => [
				'resource_name',
			],
		],
		'delete' => [
			'columns' => [
				'agent_id',
				'agent_name',
				'resource_name',
			],
		],
	],
];
