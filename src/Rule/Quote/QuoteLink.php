<?php

namespace JUTypo\Rule\Quote;

use JUTypo\Rule\AbstractRule;

class QuoteLink extends AbstractRule
{
	public $name = 'Лапки поза тегом <a>';

	public function handler(string $text): string
	{
		$pattern = '#(<a[^>]+>)([' . $this->char[ 'allQuote' ] . '])([\s\S]*?)([' . $this->char[ 'allQuote' ] . '])(</a>)#iu';
		$replace = '$2$1$3$5$4';

		return preg_replace($pattern, $replace, $text);
	}
}
