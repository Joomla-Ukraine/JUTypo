<?php

namespace JUTypo\Rule\Number;

use JUTypo\Rule\AbstractRule;

class Triad extends AbstractRule
{
	public $name = 'Розбиття числа на тріади';

	public $sort = 800;

	public function handler(string $text): string
	{
		return preg_replace_callback('#(^| |>|&nbsp;)([0-9]{5,})( |<|&nbsp;|$)#mu', function ($matches)
		{
			$num = str_replace(' ', '&thinsp;', number_format((int) $matches[ 2 ], 0, '', ' '));

			return $matches[ 1 ] . $num . $matches[ 3 ];
		}, $text);
	}
}
