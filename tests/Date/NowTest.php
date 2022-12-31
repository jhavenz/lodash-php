<?php

declare(strict_types=1);

namespace Tests\Date;

/*
 * This file is part of the SolidWorx Lodash-PHP project.
 *
 * @author     Pierre du Plessis <open-source@solidworx.co>
 * @copyright  Copyright (c) 2017
 */

use Carbon\Carbon;
use DateTime;
use function _\now;
use PHPUnit\Framework\TestCase;

class NowTest extends TestCase
{
    public function testNow()
    {
        $this->assertSame(
            (int) round((new DateTime())->format('Uu') / 1000),
            now(3)
        );
    }
}
