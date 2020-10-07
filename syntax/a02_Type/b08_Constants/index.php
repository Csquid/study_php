<?php
    
/* 
    Define Constants.
*/

/*
    old style:
        define('CONSTANT', 'Hello, world');

    current style:
        const CONSTANT = 'Hello, world';
*/

const CONSTANT_INT       = 1;
const CONSTANT_FLOAT     = 1.234;
const CONSTANT_STRING    = 'Hello, world';
const CONSTANT_ARRAY     = [
    'message' => 'Hello?'
];

var_dump(CONSTANT_ARRAY);

// CONSTANT_INT = 2; --> syntax error