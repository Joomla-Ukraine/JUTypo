<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class BeforeShortLastWord extends AbstractRule
{
	public string $name = 'Нерозривний пробіл перед останнім коротким словом у реченні';

	protected array $settings = [
		'len' => 3,
	];

	public function handler(string $text): string
	{
		$pattern = [
			'#(\S)\s([' . $this->char[ 'char' ] . '\d]{1,' . $this->settings[ 'len' ] . '}[.!?…])(\s[' . $this->char[ 'char' ] . ']|<|$)#iu',
			'#(\S)\s([' . $this->char[ 'char' ] . '\d]{1,' . $this->settings[ 'len' ] . '})($|<)#iu',
		];
		$replace = [
			'$1' . $this->char[ 'nbsp' ] . '$2$3',
			'$1' . $this->char[ 'nbsp' ] . '$2$3',
		];

		return preg_replace($pattern, $replace, $text);
	}
}
