<?php

/*
    include(_once).
*/

/*
    include인 경우 가끔 파일이 없는경우에도 에러를 발생시키지않는 경우가있지만
    require인 경우 파일이 없는경우 무조건 에러가 발생한다.
*/

/*
    include(_once).
*/
// include 'HelloWorld.php';
// include_once 'HelloWorld.php';  // 한번만 포함하게 해준다. (중복 x)

/*
    require(_once).
*/
// require 'HelloWorld.php';
// require_once 'HelloWorld.php';             // 한번만 포함하게 해준다. (중복 x)


// var_dump($message);
// foo();

$args = include_once 'include_return.php';
var_dump($args);