<?php

/*
    if
*/

if(true) {
    var_dump('Hello World');
}

/*
    if ~ else
*/

if(false) {
    var_dump('Hello, World');
} else {
    var_dump('Bye');
}
/*
    if ~ elseif ~ else
*/

if(false) {
    var_dump('Hello, World');
} elseif(true) {
    var_dump('Who are you?');
} else {
    var_dump('Bye');
}

/*
    Define Variables in If Context
*/

if($message = 'Hello World') {
    var_dump($message);
}