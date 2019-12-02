<?php

class FuelCalculator
{
    private $modulesMasses = array(
        14,
        21,
        1969,
    );

    public function echoResults()
    {
        $this->executeForAllModules();
    }

    private function executeForAllModules()
    {
        $result = array();
        $totalFuelPerModule = array();

        foreach ($this->modulesMasses as $moduleMass) {
            $moduleMass = $this->divide($moduleMass);
            $moduleMass = $this->roundDown($moduleMass);
            $moduleMass = $this->subtract($moduleMass);

            $result[] = $moduleMass;

            while ($moduleMass > 8){
                $moduleMass = $this->divide($moduleMass);
                $moduleMass = $this->roundDown($moduleMass);
                $moduleMass = $this->subtract($moduleMass);

                echo $totalFuelPerModule[] = $moduleMass;
            }
            $usedFuelInThisModule = array_sum($totalFuelPerModule);
            echo $usedFuelInThisModule."\n";
        }

        $neededFuel = array_sum ($result);
        $totalFuel = $neededFuel + $usedFuelInThisModule;
        echo "the final result is = " . $totalFuel;
    }

    private function divide($mass){
        if (isset($mass)) {
            $dividedMass = $mass/3;
            return $dividedMass;
        }
        return 0;
    }

    private function roundDown($mass){
        if (isset($mass)) {
            return floor($mass);
        }
        return 0;
    }

    private function subtract($mass){
        if (isset($mass)) {
            $mass = $mass - 2;
            return $mass;
        }
        return 0;
    }
}

$fuelCalculator = new FuelCalculator();

$fuelCalculator->echoResults();
