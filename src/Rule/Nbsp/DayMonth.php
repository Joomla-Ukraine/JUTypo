<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class DayMonth extends AbstractRule
{
	public $name = 'Нерозривний пробіл між числом та місяцем';

	public function handler(string $text): string
	{
		$pattern = '#(\d{1,2}) (' . $this->char[ 'monthShort' ] . ')#iu';
		$replace = '$1' . $this->char[ 'nbsp' ] . '$2';

		return preg_replace($pattern, $replace, $text);
	}
}
