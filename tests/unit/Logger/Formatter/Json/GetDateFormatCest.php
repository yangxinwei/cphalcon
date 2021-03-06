<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Logger\Formatter\Json;

use Phalcon\Logger\Formatter\Json;
use UnitTester;

/**
 * Class GetDateFormatCest
 *
 * @package Phalcon\Test\Unit\Logger
 */
class GetDateFormatCest
{
    /**
     * Tests Phalcon\Logger\Formatter\Json :: getDateFormat()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function loggerFormatterJsonGetDateFormat(UnitTester $I)
    {
        $I->wantToTest('Logger\Formatter\Json - getDateFormat()');
        $formatter = new Json();

        $expected = 'D, d M y H:i:s O';
        $actual   = $formatter->getDateFormat();
        $I->assertEquals($expected, $actual);
    }
}
