<?php

namespace PHPomodoro;

use PDO;
use Dotenv\Dotenv;

class Connection
{
	public function __construct()
	{
		(new Dotenv(__DIR__.'/../'))->load();
	}

	public function checkParameter(array $config)
	{
		$checks = true;
		$expected = ['dsn', 'username', 'password', 'options'];

		foreach ($config as $key => $value) {
			if (! array_search($key, $expected) && $value == '') {
				$checks = false;
			}
		}

		return $checks;
	}

	public function connect(array $config)
	{
		$config = [
			'dsn' 		=> getenv('DB_DRIVER').':host='.getenv('DB_HOST').';dbname='.getenv('DB_NAME'),
			'username' 	=> getenv('DB_USER'),
			'password' 	=> getenv('DB_PASSWORD'),
			'options'	=> null
		];

		if ($this->checkParameter($config)) {
			return new PDO(
				$config['dsn'],
				$config['username'],
				$config['password'],
				$config['options']
			);
		}
	}
}