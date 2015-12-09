<?php

namespace lookyman\Entropy\Provider;

/**
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
interface IEntropyProvider
{

	/**
	 * @param int $length
	 * @return string
	 */
	function getRandomPseudoBytes($length);

}
