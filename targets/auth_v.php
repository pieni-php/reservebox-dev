<?php
return [
	'fallback' => 'auth',
	'actor' => 'v',
	'table' => 'vendor',
	'columns' => [
		'vendor_name' => [
			'data_type' => PDO::PARAM_STR,
		],
	],
	'token_expire_minutes' => 5,
];
