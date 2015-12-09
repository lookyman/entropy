<?php

namespace lookyman\Entropy\Provider;

use lookyman\Entropy\Exception\OpenSslException;

/**
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class OpenSslProvider implements IEntropyProvider
{

	/**
	 * @param int $length
	 * @return string
	 * @throws OpenSslException
	 */
	public function getRandomPseudoBytes($length)
	{
		$data = openssl_random_pseudo_bytes((int) $length, $strong);
		if ($data === FALSE || $strong !== TRUE) {
			throw new OpenSslException('Could not get enough cryptographically strong bytes of entropy.', OpenSslException::BAD_RANDOM);
		}
		return $data;
	}

}
