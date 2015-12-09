# lookyman/Entropy

[![Build Status](https://travis-ci.org/lookyman/entropy.svg?branch=master)](https://travis-ci.org/lookyman/entropy)
[![Downloads](https://img.shields.io/packagist/dt/lookyman/entropy.svg)](https://packagist.org/packages/lookyman/entropy)
[![Latest stable](https://img.shields.io/packagist/v/lookyman/entropy.svg)](https://packagist.org/packages/lookyman/entropy)
[![Coverage Status](https://coveralls.io/repos/lookyman/entropy/badge.svg?branch=master&service=github)](https://coveralls.io/github/lookyman/entropy?branch=master)

Requirements
------

lookyman/Entropy requires PHP 5.5 or higher.

- [Nette DI](https://github.com/nette/di)


Installation
------

```sh
$ composer require lookyman/entropy
```

You can enable the extension using your neon config:

```yml
extensions:
	entropy: lookyman\Entropy\DI\EntropyExtension
```


Usage
------

This extension provides you with the service `lookyman\Entropy\Provider\IEntropyProvider`, that you can inject into your application.

```php
// $this->provider in an instance of lookyman\Entropy\Provider\IEntropyProvider

var_dump($this->provider->getRandomPseudoBytes(8));
```
