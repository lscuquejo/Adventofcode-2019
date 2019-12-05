<?php

namespace App\Day\One\Part\Tests;

use App\Day\One\Part\FuelCalculator;
use PHPUnit\Framework\TestCase;

class dividerTest extends TestCase
{
    private $fuelCalculator;

    public function testDividedByCertainNumber()
    {
        $this->fuelCalculator = new FuelCalculator();

        $divider = $this->fuelCalculator->divide(3);

        $this->assertSame(1, $divider);
    }
}
