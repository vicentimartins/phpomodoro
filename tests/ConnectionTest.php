<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use PHPomodoro\Connection;
use PDO;

class ConnectionTest extends TestCase
{
	public function testParameterOfConnection()
	{
		$config = [
			'dsn' 		=> 'mydsn',
			'username' 	=> 'myusername',
			'password' 	=> 'secret',
			'options'	=> null
		];

		$conn = new Connection();

		$this->assertTrue($conn->checkParameter($config));
	}

	public function testConnection()
	{
		$data = [];

		$this->assertInstanceOf(
			PDO::class,
			(new Connection())->connect($data)
		);
	}
}