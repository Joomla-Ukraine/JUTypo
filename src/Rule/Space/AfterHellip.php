<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class AfterHellip extends AbstractRule
{
	public string $name = 'Пробіл після знаків трикрапок і трикрапок зі знаками запитання або оклику';

	protected int $sort = 800;

	public function handler(string $text): string
	{
		$pattern = [
			'#([' . $this->char[ 'char' ] . '])(\.\.\.|…)([А-ЯЁ])#u',
			'#([?!]\.\.)([' . $this->char[ 'char' ] . ']|$)#iu',
		];
		$replace = [
			'$1$2 $3',
			'$1 $2',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
