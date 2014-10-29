<?php
/*************************************************************************************/
/*      Copyright (c) Benjamin Perche                                                */
/*      email : bperche9@gmail.com                                                   */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

use Lovenunu\Math\Number;

/**
 * Class NumberTest
 * @author Benjamin Perche <bperche9@gmail.com>
 */
class NumberTest extends PHPUnit_Framework_TestCase
{
    public function testNumberAdd()
    {
        $numberA = new Number('1.99');
        $numberB = new Number('2.58');

        $numberA->add($numberB);

        $this->assertEquals(4.57, $numberA->getNumber(-1));
    }

    public function testNumberSub()
    {
        $price = new Number('1.99');

        $price->sub('1.766');
        $this->assertEquals(0.22, $price->getNumber());
        $this->assertEquals(0.224, $price->getNumber(3));
        $this->assertEquals(0.224, $price->getNumber(-1));
    }

    public function testNumberDivideThenMultiply()
    {
        $price = new Number('3.99');

        $price->divide('1.2');
        $this->assertEquals(3.33, $price->getNumber());

        $price->multiply('1.2');
        $this->assertEquals(3.99, $price->getNumber());
    }
}
 