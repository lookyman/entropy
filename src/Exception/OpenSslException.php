<?php

namespace lookyman\Entropy\Exception;

/**
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class OpenSslException extends \RuntimeException implements IException
{

	const BAD_RANDOM = 1;

}
