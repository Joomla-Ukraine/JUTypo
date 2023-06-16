<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class DelBeforePercent extends AbstractRule
{
	public string $name = 'Видалення пробілу перед знаками відсотків';

	protected int $sort = 300;

	public function handler(string $text): string
	{
		$pattern = '#(\d)(\s|&nbsp;)([%‰‱])#iu';
		$replace = '$1$3';

		return preg_replace($pattern, $replace, $text);
	}
}
