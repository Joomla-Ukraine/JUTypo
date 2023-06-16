<?php

namespace JUTypo\Rule\Space;

use JUTypo\Rule\AbstractRule;

class Bracket extends AbstractRule
{
	public string $name = 'Видалення зайвих пробілів після дужки, що відкривається, і перед дужкою, що закривається';

	public function handler(string $text): string
	{
		$pattern = [
			'#(\()\s+#u',
			'#\s+\)#u',
		];
		$replace = [
			'(',
			')',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
