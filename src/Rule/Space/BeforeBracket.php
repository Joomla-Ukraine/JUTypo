<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class BeforeBracket extends AbstractRule
{
	public $name = 'Пробіл перед відкриваючою дужкою';

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . $this->char[ 'charEnd' ] . '…)])\(#iu';
		$replace = '$1 (';

		return preg_replace($pattern, $replace, $text);
	}
}
