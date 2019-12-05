<?php

namespace App\Day\One\Part;

/**
 * Class FuelCalculator
 * @package Day\One\Part
 */
class FuelCalculator
{
    /**
     * @var DataHolder
     */
    private $dataHolder;

    /**
     * @var $neededFuel;
     */
    private $neededFuel;

    /**
     * FuelCalculator constructor.
     * @param DataHolder $dataHolder
     */
    public function __construct(DataHolder $dataHolder = null)
    {
        $this->dataHolder = $dataHolder;
    }

    /**
     * @return void
     */
    public function executeForAllModules(): void
    {
        $result = array();

        foreach ($this->dataHolder->getModulesMasses() as $moduleMass) {
            $moduleMass = $this->divide($moduleMass);
            $moduleMass = $this->roundDown($moduleMass);
            $moduleMass = $this->subtract($moduleMass);
            $result[] = $moduleMass;
        }
        $neededFuel = $this->sumArray($result);

        $this->setNeededFuel($neededFuel);
    }


    /**
     * @param int $mass
     * @return int
     */
    public function divide(int $mass): int
    {
        if (isset($mass)) {
            $dividedMass = $mass/3;
            return $dividedMass;
        }

        return null;
    }

    /**
     * @param int $mass
     * @return int
     */
    public function roundDown(int $mass): int
    {
        if (isset($mass)) {
            return floor($mass);
        }

        return null;
    }

    /**
     * @param int $mass
     * @return int
     */
    public function subtract(int $mass): int
    {
        if (isset($mass)) {
            $mass = $mass - 2;
            return $mass;
        }

        return null;
    }

    /**
     * @param array $result
     * @return int
     */
    public function sumArray(array $result): int
    {
        if (isset($result)) {
            return array_sum ($result);
        }

        return null;
    }

    /**
     * @return mixed
     */
    public function getNeededFuel()
    {
        return $this->neededFuel;
    }

    /**
     * @param mixed $neededFuel
     */
    public function setNeededFuel($neededFuel): void
    {
        $this->neededFuel = $neededFuel;
    }
}
