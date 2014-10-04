<?php
/**
 * TextUpperLowerTest.php
 * \Phalcon\Text\TextUpperLowerTest
 *
 * Tests the Phalcon\Text component
 *
 * PhalconPHP Framework
 *
 * @copyright (c) 2011-2014 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Nikolaos Dimopoulos <nikos@phalconphp.com>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */

namespace Phalcon\Tests\unit\Phalcon\Text;

use Phalcon\Text as PhText;

class TextUpperLowerTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;

    /**
     * Tests the upper function
     *
     * @author Nikolaos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-09-29
     */
    public function testUpper()
    {
        $this->specify(
            "upper returns incorrect results",
            function () {

                expect(PhText::upper('hello'))->equals('HELLO');
                expect(PhText::upper('HELLO'))->equals('HELLO');
                expect(PhText::upper('1234'))->equals('1234');
            }
        );
    }

    /**
     * Tests the lower function
     *
     * @author Nikolaos Dimopoulos <nikos@phalconphp.com>
     * @since  2014-09-29
     */
    public function testLower()
    {
        $this->specify(
            "lower returns incorrect results",
            function () {

                expect(PhText::lower('hello'))->equals('hello');
                expect(PhText::lower('HELLO'))->equals('hello');
                expect(PhText::lower('1234'))->equals('1234');
            }
        );
    }
}