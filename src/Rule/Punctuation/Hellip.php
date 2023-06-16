<?php

namespace JUTypo\Rule\Punctuation;

use JUTypo\Rule\AbstractRule;

class Hellip extends AbstractRule
{
	public $name = 'Заміна трьох крапок на три крапки';

	protected $sort = 800;

	public function handler(string $text): string
	{
		$pattern = '#(\.\.\.)#iu';
		$replace = '&hellip;';

		return preg_replace($pattern, $replace, $text);
	}
}
