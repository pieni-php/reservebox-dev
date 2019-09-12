<?php
return [
	'pdo' => [
		'dsn' => 'mysql:dbname=reservebox',
		'username' => 'root',
		'password' => '',
	],
	'debug' => true,
	'languages' => ['ja'],
	'actors' => ['g', 'm'],
	'actions' => [
		'page' => [
			'g' => [
				'welcome' => [
					'index' => [
						'argc' => 0,
					],
				],
				'auth_m' => [
					'join' => [
						'argc' => 0,
					],
					'register' => [
						'argc' => 2,
					],
					'login' => [
						'argc' => 0,
					],
					'change_email_verify' => [
						'argc' => 2,
					],
					'forgot_password' => [
						'argc' => 0,
					],
					'reset_password' => [
						'argc' => 2,
					],
				],
			],
			'm' => [
				'welcome' => [
					'index' => [
						'argc' => 0,
					],
				],
				'auth_m' => [
					'unregister' => [
						'argc' => 0,
					],
					'logout' => [
						'argc' => 0,
					],
					'change_email' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
			],
		],
		'api' => [
			'g' => [
				'auth' => [
					'initialize' => [
						'argc' => 2,
					],
				],
				'auth_m' => [
					'join' => [
						'argc' => 0,
					],
					'register' => [
						'argc' => 2,
					],
					'login' => [
						'argc' => 0,
					],
					'change_email_verify' => [
						'argc' => 2,
					],
					'forgot_password' => [
						'argc' => 0,
					],
					'reset_password' => [
						'argc' => 2,
					],
				],
			],
			'm' => [
				'auth_m' => [
					'unregister' => [
						'argc' => 0,
					],
					'logout' => [
						'argc' => 0,
					],
					'change_email' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
			],
		],
	],
];
