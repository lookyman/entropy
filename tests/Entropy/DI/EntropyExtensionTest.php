<?php

namespace lookyman\Entropy\Tests\DI;

use Nette\DI\Compiler;
use Nette\DI\ContainerLoader;
use lookyman\Entropy\DI\EntropyExtension;
use lookyman\Entropy\Provider\IEntropyProvider;
use lookyman\Entropy\Provider\OpenSslProvider;

class EntropyExtensionTest extends \PHPUnit_Framework_TestCase
{

	public function testServices()
	{
		$container = $this->createContainer();

		$this->assertInstanceOf(OpenSslProvider::class, $service1 = $container->getService('entropy.provider'));
		$this->assertInstanceOf(OpenSslProvider::class, $service2 = $container->getByType(IEntropyProvider::class));
		$this->assertSame($service1, $service2);
	}

	/**
	 * @param array $config
	 * @return \Nette\DI\Container
	 */
	private function createContainer(array $config = [])
	{
		$loader = new ContainerLoader(TEMP_DIR, TRUE);
		$class = $loader->load($config, function (Compiler $compiler) use ($config) {
			$compiler->addExtension('entropy', new EntropyExtension);
			$compiler->addConfig($config);
		});
		$container = new $class;
		$container->initialize();
		return $container;
	}

}
