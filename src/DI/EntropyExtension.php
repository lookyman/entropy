<?php

namespace lookyman\Entropy\DI;

use Nette\DI\CompilerExtension;
use lookyman\Entropy\Provider\IEntropyProvider;
use lookyman\Entropy\Provider\OpenSslProvider;

class EntropyExtension extends CompilerExtension
{

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('provider'))
			->setClass(IEntropyProvider::class)
			->setFactory(OpenSslProvider::class);
	}

}
