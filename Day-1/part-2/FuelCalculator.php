<?php

class FuelCalculator
{
    private $modulesMasses = array(
        1969,
    );

    public function echoResults()
    {
        $this->executeForAllModules();
    }

    private function executeForAllModules()
    {
        $result = array();

        foreach ($this->modulesMasses as $moduleMass) {
            while ($moduleMass > 8){
                $moduleMass = $this->divide($moduleMass);
                $moduleMass = $this->roundDown($moduleMass);
                $moduleMass = $this->subtract($moduleMass);

                $result[] = $moduleMass;
            }
        }
        $neededFuel = array_sum($result);
        echo $neededFuel;
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
