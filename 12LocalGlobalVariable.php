<?php

echo "Welcome to local and global variable explanation....!";
echo "<br>";
$a=9;

function printValue()
{
    $a=3;
    global $a;
    echo "<br>";
    echo "Insider value $a";
}

printValue();
echo "<br>";
echo "Outersider $a value";
echo var_dump($GLOBALS);
echo "<br>Extracted value from global variables..<br>";
echo var_dump($GLOBALS["a"]);

?>