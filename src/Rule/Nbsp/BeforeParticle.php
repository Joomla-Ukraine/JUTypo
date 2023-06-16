<?php

namespace JUTypo\Rule\Nbsp;

use JUTypo\Rule\AbstractRule;

class BeforeParticle extends AbstractRule
{
	public string $name = 'Неразрывной пробел перед «ль», «же», «би», «б»';

	public int $sort = 510;

	public function handler(string $text): string
	{
		$particles = '(ль|же|ж|би|б)';
		$pattern   = '#([' . $this->char[ 'char' ] . ']) ' . $particles . '([.,;:?!"‘“»]|\s|&nbsp;)#iu';

		return preg_replace_callback($pattern, function ($matches)
		{
			return $matches[ 1 ] . $this->char[ 'nbsp' ] . $matches[ 2 ] . ('&nbsp;' === $matches[ 3 ] ? ' ' : $matches[ 3 ]);
		}, $text);
	}
}
