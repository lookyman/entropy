<?php

namespace lookyman\Entropy\Exception;

/**
 * @author Lukáš Unger <looky.msc@gmail.com>
 */
class McryptException extends \RuntimeException implements IException
{

	const BAD_RANDOM = 1;

}
