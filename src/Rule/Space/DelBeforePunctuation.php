<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelBeforePunctuation extends AbstractRule
{
	public string $name = 'Видалення пробілу перед розділовими знаками';

	protected int $sort = 300;

	public function handler(string $text): string
	{
		$pattern = '#((\s|&nbsp;)+)([' . $this->char[ 'charEnd' ] . '])(\s+|$)#iu';
		$replace = '$3$4';

		return preg_replace($pattern, $replace, $text);
	}
}
