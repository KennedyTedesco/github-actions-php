<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function test_plus() : void
    {
        $math = new Math();

        $this->assertSame(8, $math->plus(4, 4));
    }
}
