<?php

namespace JUTypo\Rule\Symbol;

use JUTypo\Rule\AbstractRule;

class Arrow extends AbstractRule
{
	public string $name = 'Стрілочки -> → →, <- → ←';

	public function handler(string $text): string
	{
		$pattern = [
			'#<<#u',
			'#>>#u',
			'#(^|[^-])->(?!>)#iu',
			'#(^|[^<])<-(?!-)#iu',
		];
		$replace = [
			'&Lt;',
			'&Gt;',
			'$1&rarr;',
			'$1&larr;',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
