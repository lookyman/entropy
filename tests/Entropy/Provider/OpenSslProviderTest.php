<?php

namespace lookyman\Entropy\Tests\Provider;

use lookyman\Entropy\Provider\OpenSslProvider;

/**
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class OpenSslProviderTest extends \PHPUnit_Framework_TestCase
{

	public function testGetRandomPseudoBytes()
	{
		$data = (new OpenSslProvider)->getRandomPseudoBytes(16);
		$this->assertInternalType('string', $data);
		$this->assertSame(16, strlen($data));
	}

}
