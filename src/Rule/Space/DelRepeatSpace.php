<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelRepeatSpace extends AbstractRule
{
	public $name = 'Видалення повторюваних пробілів';

	protected $sort = -100;

	public function handler(string $text): string
	{
		$pattern = '#[ \t]{2,}#u';
		$replace = ' ';

		return preg_replace($pattern, $replace, $text);
	}
}
