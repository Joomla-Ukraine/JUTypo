<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelBeforeLine extends AbstractRule
{
	public $name = 'Видалення пробілів на початку рядка';

	protected $sort = -100;

	public function handler(string $text): string
	{
		$pattern = '#^[ \t]+#mu';
		$replace = '';

		return preg_replace($pattern, $replace, $text);
	}
}
