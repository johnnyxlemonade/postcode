<?php

declare(strict_types=1);

namespace Brick\Postcode\Tests\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;
use Brick\Postcode\Formatter\EEFormatter;
use Brick\Postcode\Tests\CountryPostcodeFormatterTest;

/**
 * Unit tests for the EE postcode formatter.
 */
class EEFormatterTest extends CountryPostcodeFormatterTest
{
    protected function getFormatter() : CountryPostcodeFormatter
    {
        return new EEFormatter();
    }

    public function providerFormat() : array
    {
        return [
            ['', null],

            ['1', null],
            ['12', null],
            ['123', null],
            ['1234', null],
            ['12345', '12345'],
            ['123456', null],

            ['A', null],
            ['AB', null],
            ['ABC', null],
            ['ABCD', null],
            ['ABCDE', null],
            ['ABCDEF', null],
        ];
    }
}
