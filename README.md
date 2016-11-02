# bcrypt
========

[![Build Status](https://travis-ci.org/Polarising/bcrypt.svg?branch=master)](https://travis-ci.org/Polarising/bcrypt)

Instead of using PHP hash password API, encrypt plain text by using Bcrypt algorithm, and make sure it's compatible with other languages, like Java, python

## Installing Bcrypt

The recommended way to install Bcrypt is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Bcrypt:

```bash
php composer.phar require polarising/bcrypt
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update Guzzle using composer:

 ```bash
composer.phar update
 ```

## Quick Examples

# Encrypt Plaintext, Verify Plaintext and Ciphertext 

```php
<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Bcrypt\Bcrypt;

// Instantiate an Bcrypt instance.
$bcrypt = new Bcrypt();

//Encrypt the plaintext
$plaintext = 'password';
$ciphertext = $bcrypt->encrypt($plaintext);
print_r("\n Plaintext:".$plaintext);
print_r("\n Ciphertext:".$ciphertext);

//Verify the plaintext and ciphertext
if($bcrypt->verify($plaintext, $ciphertext)){
	print_r("\n Password verified!");
}else{
	print_r("\n Password not match!");
}
```
