<?php

namespace JUTypo\Rule\Punctuation;

use JUTypo\Rule\AbstractRule;

class ANo extends AbstractRule
{
	public $name = 'Розставлення ком перед а, але';

	protected $sort = 300;

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . '])(\s|&nbsp;)(а|але)(\s|&nbsp;)#iu';

		$replace = '$1,$2$3$4';

		return preg_replace($pattern, $replace, $text);
	}
}