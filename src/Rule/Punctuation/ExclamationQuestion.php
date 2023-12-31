<?php

namespace JUTypo\Rule\Punctuation;

use JUTypo\Rule\AbstractRule;

class ExclamationQuestion extends AbstractRule
{
	public $name = 'Заміна знаків оклику та запитання місцями';

	public $sort = 800;

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . '])!\?(\s|$|<)#iu';
		$replace = '$1?!$2';

		return preg_replace($pattern, $replace, $text);
	}
}
