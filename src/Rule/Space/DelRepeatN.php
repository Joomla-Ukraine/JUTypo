<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelRepeatN extends AbstractRule
{
	public $name = 'Видалення повторюваних переносів рядка';

	protected $sort = -100;

	public function handler(string $text): string
	{
		$pattern = '#\n{2,}#u';
		$replace = "\n";

		return preg_replace($pattern, $replace, $text);
	}
}
