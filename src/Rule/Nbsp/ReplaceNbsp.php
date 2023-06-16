<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class ReplaceNbsp extends AbstractRule
{
	public string $name = 'Заміна нерозривного пробілу на звичайний перед типографуванням';

	protected int $sort = -100;

	protected bool $active = false;

	public function handler(string $text): string
	{
		return str_replace($this->char[ 'nbsp' ], ' ', $text);
	}
}
