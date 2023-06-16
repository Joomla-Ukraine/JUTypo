<?php

namespace JUTypo\Rule\Number;

use JUTypo\Rule\AbstractRule;

class DimensionSup extends AbstractRule
{
	public string $name = 'Верхній індекс для см2, м2 тощо';

	public function handler(string $text): string
	{
		$pattern = '#(м|мм|см|дм|км|гм|m|km|dm|cm|mm)([\d]{1,3})([^' . $this->char[ 'char' ] . '0-9]|$)#iu';
		$replace = '$1<sup>$2</sup>$3';

		return preg_replace($pattern, $replace, $text);
	}
}
