<?php

namespace JUTypo\Rule\Html;

use JUTypo\Rule\AbstractRule;

class RemoveStyle extends AbstractRule
{
	public $name = 'Видалення порожнього параграфу';

	public function handler(string $text): string
	{
		$pattern = [
			'#<span style=".*?">#s',
			'#<table style=".*?">#s',
			'#<p style=".*?">#s',
			'#<div style=".*?">#s',
		];
		$replace = '';

		return preg_replace($pattern, $replace, $text);
	}
}
