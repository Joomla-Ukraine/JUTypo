<?php

namespace JUTypo\Rule\Dash;

use JUTypo\Rule\AbstractRule;

class ReplaceDash extends AbstractRule
{
	public string $name = 'Заміна дефіса на тире та виправлення дублів, перед типографуванням';

	protected array $settings = [
		'len' => 2,
	];

	protected int $sort = -100;

	public function handler(string $text): string
	{
		$pattern = '#(\s|&nbsp;)(' . $this->char[ 'allDash' ] . '){1,' . $this->settings[ 'len' ] . '}(\s|&nbsp;)#iu';
		$replace = $this->char[ 'nbsp' ] . $this->char[ 'dash' ] . '$3';

		return preg_replace($pattern, $replace, $text);
	}
}