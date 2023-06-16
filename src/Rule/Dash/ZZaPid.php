<?php

namespace JUTypo\Rule\Dash;

use JUTypo\Rule\AbstractRule;

class ZZaPid extends AbstractRule
{
	public $name = 'Розставлення дефісів між з-за, з-під';

	public function handler(string $text): string
	{
		$pattern = '#(^|>|\s|&nbsp;)(з)(\s|&nbsp;)-?(за|під)([' . $this->char[ 'charEnd' ] . ']|\s|&nbsp;)#iu';

		return preg_replace_callback($pattern, function ($matches)
		{
			return $matches[ 1 ] . $matches[ 2 ] . '-' . $matches[ 4 ] . ('&nbsp;' === $matches[ 5 ] ? ' ' : $matches[ 5 ]);
		}, $text);
	}
}
