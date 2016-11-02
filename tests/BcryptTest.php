<?php
namespace Bcrypt\Test;

use Bcrypt\Bcrypt;

class BcryptTest extends \PHPUnit_Framework_TestCase
{
	public function testCanEncrypt()
	{
		$bcrypt = new Bcrypt();
		$plaintext = '123456';
		$ciphertext = $bcrypt->encrypt($plaintext);
		$this->assertNotEquals('*0', $ciphertext);
	}

	public function testCanVerify()
	{
		$bcrypt = new Bcrypt();
		$plaintext = '123456';
		$ciphertext = $bcrypt->encrypt($plaintext);
		$this->assertTrue($bcrypt->verify($plaintext, $ciphertext));
	}
}