<?php

/*
    Logical Operators.
*/

/*
    and &&
    or ||
    xor 
    not !
*/

/*
    AND     OR      XOR     NOT
    1 1 1   1 1 1   1 1 0   1 0
    1 0 0   1 0 1   1 0 1   0 1
    0 1 0   0 1 1   0 1 1
    0 0 0   0 0 0   0 0 0
*/

var_dump(true && true);
var_dump(true || false);
var_dump(true xor false);
var_dump(!false);