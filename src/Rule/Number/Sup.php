<?php

namespace JUTypo\Rule\Number;

use JUTypo\Rule\AbstractRule;

class Sup extends AbstractRule
{
	public string $name = 'Нижній індекс для ^';

	public function handler(string $text): string
	{
		$pattern = '#([' . $this->char[ 'char' ] . '0-9])\^([\d]{1,3})([^' . $this->char[ 'char' ] . '0-9]|$)#iu';
		$replace = '$1<sup>$2</sup>$3';

		return preg_replace($pattern, $replace, $text);
	}
}
