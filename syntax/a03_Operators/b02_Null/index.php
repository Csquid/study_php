<?php

/*
    Null coalescing
    null 합치기
*/

$message = null;

/*
    -> Hello world
    if $message is null --> output 'Hello, world'
    만약 $message 가 null 이라면 'Hello, world' 라고 출력해준다.
*/

echo $message ?? 'Hello, world';    