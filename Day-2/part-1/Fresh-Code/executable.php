<?php

namespace FreshCode;

require 'intCodeProgram.php';

$intCodeProgram = new intCodeProgram();

$intCodeProgram->execute();

echo 'Your value is ' . $intCodeProgram->getFinalResult() . ' !!!!!';
