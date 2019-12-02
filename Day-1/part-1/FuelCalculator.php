<?php

namespace Day\One\Part;

class FuelCalculator
{
    private $dataHolder;

    public function __construct(DataHolder $dataHolder)
    {
        $this->dataHolder = $dataHolder;
        $this->executeForAllModules();
    }

    private function executeForAllModules()
    {
        $result = array();

        foreach ($this->dataHolder->getModulesMasses() as $moduleMass) {
            $moduleMass = $this->divide($moduleMass);
            $moduleMass = $this->roundDown($moduleMass);
            $moduleMass = $this->subtract($moduleMass)."\n";
            $result[] = $moduleMass;
        }
        $neededFuel = $this->sumArray($result);

        echo "the final result is = " . $neededFuel;
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

    private function sumArray($result){
        if (isset($result)) {
            return array_sum ($result);
        }
        return 0;
    }
}
