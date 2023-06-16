<?php

namespace JUTypo\Rule\Punctuation;

use JUTypo\Rule\AbstractRule;

class Apostrophe extends AbstractRule
{
	public string $name = 'Розставлення правильного апострофа в текстах';

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . ']+)\'([' . $this->char[ 'char' ] . ']+)#iu';

		$replace = '$1&rsquo;$2';

		return preg_replace($pattern, $replace, $text);
	}
}