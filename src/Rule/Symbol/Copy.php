<?php

namespace JUTypo\Rule\Symbol;

use JUTypo\Rule\AbstractRule;

class Copy extends AbstractRule
{
    public $name = 'Копірайт ©, торгова марка ™,®';

    public function handler(string $text): string
    {
        $pattern = [
            '#\(r\)#iu',
            '#(copyright )?\((c|с)\)#iu',
            '#\(tm\)#iu',
        ];
        $replace = [
            '&reg;',
            '&copy;',
            '&trade;',
        ];

        return preg_replace($pattern, $replace, $text);
    }
}
