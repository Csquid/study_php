<?php

/*
    foreach (as [$key =>] $value).
*/

$response = [
    // 'name'       => 'PHP',
    // 'categoryId' => 0,
    'message'    => [
        'Hello, world',
        'Who are you',
        'Bye'
    ]
];

foreach($response as $key => $value) {
    // echo $value . PHP_EOL;
    foreach ($value as $msg) {
        echo $msg . PHP_EOL;
    }
}