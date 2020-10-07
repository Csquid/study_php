<?php

/*
    Define Variables.
*/

$a; $b;

$message    = "Hello, World";       // String
$userCount  = 0;                    // Int
$pi         = 3.14;                 // Double
$is_visited = false;                // Boolan
$temp       = null;                 // NULL

/*
    Using Variables.
*/

/*
    Using Variables is String
*/
echo "This message is {$message}";

/*
    Here Doc, Now Doc
*/

echo <<<HTML
<html>
    <head>
        <title>${message}</title>
    </head>
</html>
HTML;
