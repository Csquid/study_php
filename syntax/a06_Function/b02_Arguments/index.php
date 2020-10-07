<?php

/*
    Define function with parameters.
*/

function foo(string $arg) {
    echo $arg;
}


/*
Default Parameter
*/

function foo2($arg = 'Hello, world') {
    echo $arg;
}


function foo3(...$args) {
    var_dump($args);
}


function foo4($arg1, $arg2, $arg3) {
    var_dump($arg1, $arg2, $arg3);
}



function foo5() {
    return 'Hello, world';
}

function foo6(bool $is) {
    if($is) {
        return 'Hello, world';
    }

    return 'Bye';
}

function foo7($arg) {
    return $arg;
}
// foo('Hello World');

// foo2('Who are you?');
// foo2();

// foo3('Hello, World', 'Who are you', 'Bye');

// $args = ['Hello, World', 'Who are you', 'Bye'];
// foo4(...$args);

// echo foo5();
// echo foo6(true);
// echo foo7('Hello, world');