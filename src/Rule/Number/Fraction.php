<?php

namespace JUTypo\Rule\Number;

use JUTypo\Rule\AbstractRule;

class Fraction extends AbstractRule
{
	public $name = 'Заміна дробів 1/2, 1/4, 3/4 на відповідні символи';

	public $active = false;

	public function handler(string $text): string
	{
		$pattern = [
			'#(^|\D)1/([24])(\D|$)#iu',
			'#(^|\D)3/4(\D|$)#iu',
		];
		$replace = [
			'$1&frac1$2;$3',
			'$1&frac34;$2',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
