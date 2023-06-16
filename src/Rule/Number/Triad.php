<?php

namespace JUTypo\Rule\Number;

use JUTypo\Rule\AbstractRule;

class Triad extends AbstractRule
{
	public string $name = 'Розбиття числа на тріади';

	public int $sort = 800;

	public function handler(string $text): string
	{
		return preg_replace_callback('#(^| |>|&nbsp;)([0-9]{5,})( |<|&nbsp;|$)#mu', static function ($matches)
		{
			$num = str_replace(' ', '&thinsp;', number_format((int) $matches[ 2 ], 0, '', ' '));

			return $matches[ 1 ] . $num . $matches[ 3 ];
		}, $text);
	}
}
