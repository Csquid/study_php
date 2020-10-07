<?php

/*
    what is function - print_r:
        Outputs human readable information about variables.
        변수에 대해 사람이 읽을 수 있는 정보를 출력
*/
/*
    Define Array.
*/

// $messages = [
//     'Hello, World',
//     'Who are you?',
//     'Bye'
// ];

// $messages = array('Hello, World', 'Who are you?', 'Bye');


/*
Define Array with key.
키를 사용하여 배열을 정의하기.
*/

$messages = [
    0         => 'Hello, World',
    'message' => 'Who are you',
    'Bye'
];
    

/*
Destructuring. (비 구조화 할당)
It breaks down the array and puts it in a variable.
배열을 분해를 해서 변수에다 담는 역할을 해주게 된다.

*/

list(,, $message) = $messages;
// [, $message] = $messages;
// ['message' => $message] = $messages;

var_dump($message);
// print_r ($messages);
?>