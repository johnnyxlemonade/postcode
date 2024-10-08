<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Austria.
 *
 * Postcodes consist of 4 digits, without separator. The first digit must be 1-9.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 * @see https://en.wikipedia.org/wiki/Postal_codes_in_Austria
 */
class ATFormatter implements CountryPostcodeFormatter
{
    public function format(string $postcode) : ?string
    {
        if (preg_match('/^[1-9][0-9]{3}$/', $postcode) !== 1) {
            return null;
        }

        return $postcode;
    }
}
