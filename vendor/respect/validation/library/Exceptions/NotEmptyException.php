<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

class NotEmptyException extends ValidationException
{
    const STANDARD = 0;
    const NAMED = 1;
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => 'The value must not be empty',
            self::NAMED => '{{name}} ne doit pas être vide',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => 'The value must be empty',
            self::NAMED => '{{name}} ne doit pas être vide',
        ],
    ];

    public function chooseTemplate()
    {
        return $this->getName() == '' ? static::STANDARD : static::NAMED;
    }
}
