<?php

namespace parttwo;

class intCodeProgram
{
    private $intCode;

    private $machine = array(
        1,0,0,3,1,1,2,3,1,3,4,3,1,5,0,3,2,10,1,19,1,6,19,23,1,23,13,27,2,6,27,31,1,5,31,35,2,10,35,39,1,6,39,43,1,13,43,
        47,2,47,6,51,1,51,5,55,1,55,6,59,2,59,10,63,1,63,6,67,2,67,10,71,1,71,9,75,2,75,10,79,1,79, 5,83,2,10,83,87,1,87
        ,6,91,2,9,91,95,1,95,5,99,1,5,99,103,1,103,10,107,1,9,107,111,1,6,111,115,1,115,5,119,1,10, 119,123,2,6,123,127,
        2,127,6,131,1,131,2,135,1,10,135,0,99,2,0,14,0
    );

    private $position;

    private $finalResult;

    const END = 99;
    const SUM = 1;
    const MULTIPLY = 2;

    public function execute()
    {
        while ($this->getFinalResult() < 19690721) {
    //            while ($this->intCode['1'] < 99) {
                // + 1

        for ($a=0; $a<=100; $a++) {

            for ($i=0; $i<=100; $i++) {
                $this->intCode = $this->machine;

                $this->intCode['2'] = $i;
                $this->intCode['1'] = $a;

                $this->position = 0;

                while ($this->intCode[$this->position] !== self::END) {
                    if ($this->intCode[$this->position] == self::SUM) {
                        $this->sumIntCodeExecute();
                    } elseif ($this->intCode[$this->position] == self::MULTIPLY) {
                        $this->multiplyIntCodeExecute();
                    }
                }

                $this->setFinalResult($this->intCode[0]);

                var_dump($this->getFinalResult());
            }
        }
                //                $this->position = 0;
//
//                while ($this->intCode[$this->position] !== self::END) {
//                    if ($this->intCode[$this->position] == self::SUM) {
//                        $this->sumIntCodeExecute();
//                    } elseif ($this->intCode[$this->position] == self::MULTIPLY) {
//                        $this->multiplyIntCodeExecute();
//                    }
//                }
//
//                $this->setFinalResult($this->intCode[0]);
//
//                $this->intCode['1'] = $this->intCode['1'] + 1;
//
//                var_dump($this->finalResult);
//            }
        }
    }

    private function sumArrayValues($firstParameter, $secondParameter)
    {
        return $firstParameter + $secondParameter;
    }

    private function multiplyArrayValues($firstParameter, $secondParameter)
    {
        return $firstParameter * $secondParameter;
    }

    public function sumIntCodeExecute()
    {
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

        // replace array with summed value
        $this->intCode[$getThirdParameter] = $this->sumArrayValues(
            $this->intCode[$getFirstParameter], $this->intCode[$getSecondParameter]
        );

        $this->position = $this->position + 1;
    }

    public function multiplyIntCodeExecute()
    {
        // equals 1
        $this->position = $this->position + 1;

        // equals 3
        $getFirstParameter = $this->intCode[$this->position];

        // equals 2
        $this->position = $this->position + 1;

        // equals 2
        $getSecondParameter = $this->intCode[$this->position];

        // equals 3
        $this->position = $this->position + 1;

        $getThirdParameter = $this->intCode[$this->position];

        // replace array with multiplied value.
        $this->intCode[$getThirdParameter] = $this->multiplyArrayValues(
            $this->intCode[$getFirstParameter], $this->intCode[$getSecondParameter]
        );

        $this->position = $this->position + 1;
    }

    /**
     * @return mixed
     */
    public function getFinalResult()
    {
        return $this->finalResult;
    }

    /**
     * @param mixed $setFinalResult
     */
    public function setFinalResult($setFinalResult): void
    {
        $this->finalResult = $setFinalResult;
    }
}
