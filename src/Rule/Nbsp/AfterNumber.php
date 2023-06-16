<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class AfterNumber extends AbstractRule
{
	public string $name = 'Нерозривний пробіл, після чисел';

	protected array $settings = [
		'maxLen' => 5,
	];

	public function handler(string $text): string
	{
		$pattern = '#(^|\D)(\d{1,' . $this->settings[ 'maxLen' ] . '}) ([' . $this->char[ 'char' ] . ']+)#iu';
		$replace = '$1$2' . $this->char[ 'nbsp' ] . '$3';

		return preg_replace($pattern, $replace, $text);
	}
}
