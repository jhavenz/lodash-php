<?php

declare(strict_types=1);

/*
 * This file is part of the SolidWorx Lodash-PHP project.
 *
 * @author     Pierre du Plessis <open-source@solidworx.co>
 * @copyright  Copyright (c) 2017
 */

namespace _;

use Webmozart\Assert\Assert;/**
 * Gets the timestamp of the number of milliseconds that have elapsed since the Unix epoch (1 January 1970 00:00:00 UTC).
 *
 * @example now()   1532087464437474 (microsecond maximum precision)
 * @example now(6)  1532087464437474
 * @example now(5)  153208746443747  (1/100000 second precision)
 * @example now(4)  15320874644375   (1/10000 second precision)
 * @example now(3)  1532087464437    (millisecond precision)
 * @example now(2)  153208746444     (1/100 second precision)
 * @example now(1)  15320874644      (1/10 second precision)
 * @example now(0)  1532087464       (second precision)
 * @example now(-1) 153208746        (10 second precision)
 * @example now(-2) 15320875         (100 second precision)
 *
 * @example
 * <code>
 * now();
 * // => 1511180325735
 * </code>
 *@param int $precision
 *
 * @return int Returns the timestamp.
 *
 * @category Date
 *
 */
function now(int $precision = 6): int
{
    /**
     * Get the answer prior to validating the param for most accurate precision
     *
     * @credit nesbot/carbon
     *
     * \Carbon\Traits\Timestamp::getPreciseTimestamp()
     */
    $returnValue = (int) round(((float) (new \DateTime())->format('Uu')) / pow(10, 6 - $precision));

    Assert::inArray($precision, range(-9, 6), "precision given [{$precision}], must be between -9 and 6");

    return $returnValue;
}
