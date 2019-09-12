<?php
return [
	'fallback' => 'auth',
	'actor' => 'a',
	'table' => 'agent',
	'columns' => [
		'agent_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'token_expire_minutes' => 5,
];
