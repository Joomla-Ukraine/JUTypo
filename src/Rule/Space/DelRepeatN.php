<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelRepeatN extends AbstractRule
{
	public string $name = 'Видалення повторюваних переносів рядка';

	protected int $sort = -100;

	public function handler(string $text): string
	{
		$pattern = '#\n{2,}#u';
		$replace = "\n";

		return preg_replace($pattern, $replace, $text);
	}
}
