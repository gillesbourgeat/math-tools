<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\Math;

/**
 * Class GCD
 * @package Thelia\Math
 * @author Benjamin Perche <bperche@openstudio.com>
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
 