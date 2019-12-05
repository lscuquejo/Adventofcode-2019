<?php

class intCodeProgram
{
//    private $intCode = array(
//        1,0,0,3,1,1,2,3,1,3,4,3,1,5,0,3,2,10,1,19,1,6,19,23,1,23,13,27,2,6,27,31,1,5,31,35,2,10,35,39,1,6,39,43,1,13,43,
//        47,2,47,6,51,1,51,5,55,1,55,6,59,2,59,10,63,1,63,6,67,2,67,10,71,1,71,9,75,2,75,10,79,1,79, 5,83,2,10,83,87,1,87
//        ,6,91,2,9,91,95,1,95,5,99,1,5,99,103,1,103,10,107,1,9,107,111,1,6,111,115,1,115,5,119,1,10, 119,123,2,6,123,127,
//        2,127,6,131,1,131,2,135,1,10,135,0,99,2,0,14,0
//    );


    private $finalIntCode = array();

//    public function __construct()
//    {
//        $position = 0;
//        if ($this->intCode[$position] = 1) {
//            $this->finalIntCode[$position] = 0;
//            $this->finalIntCode[$position] = $this->intCode[$position];
//            var_dump($this->finalIntCode);
//            $position = $position + 1;
//            echo $position."\n";
//            $firstParameter = $this->intCode[$position];
//            $firstParameterValue = $this->intCode[$firstParameter];
//            echo $firstParameterValue."\n";
//            $position = $position + 1;
//            $secondParameter = $this->intCode[$position];
//            $secondParameterValue = $this->intCode[$secondParameter];
//            echo $secondParameterValue."\n";
//            $position = $position + 1;
//            $thirdParameterNewValue = $firstParameterValue + $secondParameterValue;
//            echo $this->intCode[$position] = $thirdParameterNewValue."\n";
//        }
//    }

    public function __construct()
    {
        $this->execute();
    }

    private $intCode = array(
        1,0,0,0,99
    );

    private $position;

    const END = 99;
    const SUM = 1;
    const MULTIPLY = 2;

    public function execute()
    {
        $this->position = 0;

        while ($this->intCode[$this->position] !== self::END) {
            if ($this->intCode[$this->position] == 1) {
                // equals 1
                $this->position = $this->position + 1;

                // equals 0
                $getFirstParameter = $this->intCode[$this->position];

                // equals 2
                $this->position = $this->position + 1;

                // equals 0
                $getSecondParameter = $this->intCode[$this->position];

                // equals 3
                $this->position = $this->position + 1;

                $getThirdParameter = $this->intCode[$this->position];

                //sum
                $sumResult = $this->intCode[$getFirstParameter] + $this->intCode[$getSecondParameter];

                // replace array with values.
                $this->intCode[$getThirdParameter] = $sumResult;

                var_dump($this->intCode);
            }
        }
    }

    private function add()
    {
    }
}

new intCodeProgram();