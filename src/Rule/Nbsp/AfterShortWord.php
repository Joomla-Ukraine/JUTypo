<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class AfterShortWord extends AbstractRule
{
	public string $name = 'Нерозривний пробіл, після короткого слова';

	protected array $settings = [
		'len' => 2,
	];

	public function handler(string $text): string
	{
		$before  = '\s(' . $this->char[ 'allQuote' ];
		$pattern = '#(^|' . $this->char[ 'nbsp' ] . '|[a-z0-9];|[' . $before . '])([' . $this->char[ 'char' ] . ']{1,' . $this->settings[ 'len' ] . '})\s#iu';
		$replace = '$1$2' . $this->char[ 'nbsp' ];
		$text    = preg_replace($pattern, $replace, $text);

		return preg_replace($pattern, $replace, $text);
	}
}
