<?php

namespace parttwo;

require 'intCodeProgram.php';

$intCodeProgram = new intCodeProgram();

$intCodeProgram->execute();

echo 'Your value is ' . $intCodeProgram->getFinalResult() . ' !!!!!';
