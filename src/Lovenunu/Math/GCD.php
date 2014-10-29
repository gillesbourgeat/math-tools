<?php
/*************************************************************************************/
/*      Copyright (c) Benjamin Perche                                                */
/*      email : bperche9@gmail.com                                                   */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Lovenunu\Math;

/**
 * Class GCD
 * @package Lovenunu\Math
 * @author Benjamin Perche <bperche9@gmail.com>
 */
class GCD 
{
    public static function getGCD($numberA, $numberB)
    {
        if (!is_int($numberA) | !is_int($numberB)) {
            throw new \InvalidArgumentException(
                "GCD number must be an integer"
            );
        }

        while ($numberA !== $numberB) {
            if ($numberA > $numberB) {
                $numberA -= $numberB;
            } else {
                $numberB -= $numberA;
            }
        }

        return max($numberA, $numberB);
    }
}
 