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

namespace Phalcon\Test\Integration\Validation\Validator\File;

use Phalcon\Test\Fixtures\Traits\ValidationTrait;
use Phalcon\Validation\Validator\File;
use IntegrationTester;

/**
 * Class HasOptionCest
 */
class HasOptionCest
{
    use ValidationTrait;

    /**
     * Tests Phalcon\Validation\Validator\File :: hasOption()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function validationValidatorFileHasOption(IntegrationTester $I)
    {
        $I->wantToTest('Validation\Validator\File - hasOption()');
        $validator = new File(['message' => 'This is a message']);
        $this->checkHasOption($I, $validator);
    }
}
