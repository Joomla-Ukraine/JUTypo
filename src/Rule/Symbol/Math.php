<?php

namespace JUTypo\Rule\Symbol;

use JUTypo\Rule\AbstractRule;

class Math extends AbstractRule
{
	public string $name = 'Математичні знаки більше, менше, плюс, дорівнює, помножити';

	public function handler(string $text): string
	{
		$pattern = [
			'#!=#u',
			'#\<=#u',
			'#(^|[^=])>=#iu',
			'#~=#u',
			'#(^|[^+])\+-#iu',
			'#<<#u',
			'#>>#u',
			'#(\d)-(\d)#iu',
			'#(\d+)(\s|&nbsp;)*[xх](\s|&nbsp;)*(\d+)(?!\d*[' . $this->char[ 'char' ] . '])#iu',
		];
		$replace = [
			'&ne;',
			'&le;',
			'$1&ge;',
			'&cong;',
			'$1&plusmn;',
			'&Lt;',
			'&Gt;',
			'$1&minus;$2',
			'$1&times;$4$5',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
