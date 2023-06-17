<?php

namespace JUTypo\Rule\Html;

use JUTypo\Rule\AbstractRule;

class RemoveParagraph extends AbstractRule
{
	public $name = 'Видалення порожнього параграфу';

	public function handler(string $text): string
	{
		$pattern = [ '<p></p>', '<p><p>', '</p></p>' ];
		$replace = '';

		return str_replace($pattern, $replace, $text);
	}
}
