<?php

$name = "Hello world";
echo "Name is $name";
echo "<br>";

//. is used to concatinate the string
echo "the length of"."string is ".strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";
echo strrev($name);

echo "<br>";
// str_replace is case sensitive function
echo str_replace("Hello","Yello",$name);
echo "<br>";
echo strpos($name,"o");

echo "<pre>";
echo "     Hello....how are you ?   ";
echo "<pre>";

echo ltrim("   skfksfks      ");
echo r





trim("   skfksfks      ");
?>