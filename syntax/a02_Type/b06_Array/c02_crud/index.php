<?php

$messages = [
    'Hello World!',
    'Who are you',
    'Bye'
];

/*
    insert
*/

$messages[] = 'whoops';
// $messages[3] = 'whoops';

var_dump($messages);

/*
    Select
*/

echo $messages[3];

/*
    Update
*/

$messages[3] = 'Do You Know?';

var_dump($messages);

/*
    Delete
*/

unset($messages[3]);

print_r($messages);