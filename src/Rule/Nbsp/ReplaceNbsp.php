<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class ReplaceNbsp extends AbstractRule
{
	public $name = 'Заміна нерозривного пробілу на звичайний перед типографуванням';

	protected $sort = -100;

	protected $active = false;

	public function handler(string $text): string
	{
		return str_replace($this->char[ 'nbsp' ], ' ', $text);
	}
}
