<?php

namespace JUTypo\Rule\Html;

use JUTypo\Rule\AbstractRule;

class RemoveStyle extends AbstractRule
{
	public $name = 'Видалення style';

	public function handler(string $text): string
	{
		$pattern = [
			'#<span style=".*?">#m',
			'#<table style=".*?">#m',
			'#<p style=".*?">#m',
			'#<div style=".*?">#m',
		];
		$replace = [
			'<span>',
			'<table>',
			'<p>',
			'<div>',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
