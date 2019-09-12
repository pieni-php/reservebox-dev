<?php
return [
	'pdo' => [
		'dsn' => 'mysql:dbname=reservebox',
		'username' => 'root',
		'password' => '',
	],
	'debug' => true,
	'languages' => ['ja'],
	'actors' => ['g', 'm', 'a', 'v'],
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
				'auth_a' => [
					'login' => [
						'argc' => 0,
					],
					'forgot_password' => [
						'argc' => 0,
					],
					'reset_password' => [
						'argc' => 2,
					],
				],
				'auth_v' => [
					'login' => [
						'argc' => 0,
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
			'a' => [
				'welcome' => [
					'index' => [
						'argc' => 0,
					],
				],
				'auth_a' => [
					'logout' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
			],
			'v' => [
				'welcome' => [
					'index' => [
						'argc' => 0,
					],
				],
				'auth_v' => [
					'logout' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
				'vendor' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
				],
				'agent' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
				],
				'member' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
				],
			],
		],
		'api' => [
			'g' => [
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
				'auth_a' => [
					'login' => [
						'argc' => 0,
					],
					'forgot_password' => [
						'argc' => 0,
					],
					'reset_password' => [
						'argc' => 2,
					],
				],
				'auth_v' => [
					'login' => [
						'argc' => 0,
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
			'a' => [
				'auth_a' => [
					'logout' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
			],
			'v' => [
				'auth_v' => [
					'logout' => [
						'argc' => 0,
					],
					'change_password' => [
						'argc' => 0,
					],
				],
				'vendor' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
					'edit_affect' => [
						'argc' => 1,
					],
				],
				'agent' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
					'edit_affect' => [
						'argc' => 1,
					],
				],
				'member' => [
					'index' => [
						'argc' => 0,
					],
					'view' => [
						'argc' => 1,
					],
					'edit' => [
						'argc' => 1,
					],
					'edit_affect' => [
						'argc' => 1,
					],
				],
			],
		],
	],
];
