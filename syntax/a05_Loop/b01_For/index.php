<?php

/*
    For
*/

for($i = 0; $i < 10; $i++) {
    echo $i;    // -> 1 ~ 10
}

$message = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

/*
    What is this function? [ count() ]:
        This function counts the number of arrays.
        이 함수는 배열 수를 카운터 합니다.

    What is PHP_EOL ?:
        Insert the end of the enter.
        마지막에 엔터를 넣어준다.
*/
for ($i = 0; $i < count($message); $i++) {
    echo $message[$i]  . PHP_EOL;
}