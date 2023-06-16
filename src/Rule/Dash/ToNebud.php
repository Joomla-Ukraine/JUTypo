<?php

namespace JUTypo\Rule\Dash;

use JUTypo\Rule\AbstractRule;

class ToNebud extends AbstractRule
{
	public $name = 'Дефіс перед «то», «небудь»';
	public $sort = 300;

	public function handler(string $text): string
	{
		$words = [
			'звідки',
			'куда',
			'де',
			'коли',
			'як',
			'яка',
			'які',
			'якими',
			'яку',
			'що',
			'чого',
			'чий',
			'чиїм?',
			'хто',
			'кого',
			'кому',
			'ким',
		];

		$group   = implode('|', $words);
		$pattern = '#(' . $group . ')-?(\s|&nbsp;)-?(то|небудь)([' . $this->char[ 'charEnd' ] . ']|\s|<|&nbsp;|$)#iu';

		return preg_replace_callback($pattern, function ($matches)
		{
			return $matches[ 1 ] . '-' . $matches[ 3 ] . ('&nbsp;' === $matches[ 4 ] ? ' ' : $matches[ 4 ]);
		}, $text);
	}
}
