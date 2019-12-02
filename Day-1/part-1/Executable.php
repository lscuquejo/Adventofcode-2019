<?php

namespace Day\One\Part;

require "DataHolder.php";
require "FuelCalculator.php";

$fuelCalculator = new FuelCalculator(new DataHolder());

echo "the final result is = " . $fuelCalculator->getNeededFuel();
