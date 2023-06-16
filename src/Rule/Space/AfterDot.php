<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class AfterDot extends AbstractRule
{
	public $name = 'Забутий пробіл після крапки';

	protected $sort = 300;

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . '0-9]{2,})\.([А-ЯЁA-Z\n])#u';
		$replace = '$1. $2';

		return preg_replace($pattern, $replace, $text);
	}
}
