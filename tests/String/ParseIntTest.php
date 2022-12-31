<?php

declare(strict_types=1);

namespace Tests\String;

/*
 * This file is part of the SolidWorx Lodash-PHP project.
 *
 * @author     Pierre du Plessis <open-source@solidworx.co>
 * @copyright  Copyright (c) 2017
 */

use PHPUnit\Framework\TestCase;
use function _\parseInt;

class ParseIntTest extends TestCase
{
    public function testParseInt()
    {
        $this->assertSame(8, parseInt('08'));
        $this->assertSame(8, parseInt('08', 10));
    }
}
