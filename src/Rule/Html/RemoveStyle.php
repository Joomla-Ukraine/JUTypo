<?php

namespace JUTypo\Rule\Html;

use JUTypo\Rule\AbstractRule;
use Symfony\Component\HtmlSanitizer\HtmlSanitizer;
use Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig;

class RemoveStyle extends AbstractRule
{
	public $name = 'Видалення порожнього параграфу';

	public function handler(string $text): string
	{
		$sanitizer = new HtmlSanitizer(
			(new HtmlSanitizerConfig())
				->dropAttribute('style', 'span')
				->dropAttribute('style', 'table')
				->dropAttribute('style', 'p')
				->dropAttribute('style', 'div')
		);

		return $sanitizer->sanitize($text);
	}
}
