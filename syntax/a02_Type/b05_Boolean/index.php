<?php

/*
    Boolean Type
*/

true;
false;

/*
    Type Casting.
*/

(bool) 10;      // -> true
(bool) [];      // -> false (empty array - 빈 배열)
(bool) '';      // -> false (empty string - 빈 문자열)
(bool) null;    // -> false