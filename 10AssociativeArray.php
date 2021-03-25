<?php

echo "Associative Array Tutorial";
echo "<br>";
$arr=array("this","that","what");
echo "<br>";

echo $arr[0];
echo $arr[1];
echo $arr[2];

echo "<br>";

/// Example of Associative Array
$arr1=array(
    "rohan"=>"green",
    "sm"=>"blue",
    "pm"=>"yellow",
    8=>"black"
    
);

echo "<br>";
echo $arr1["rohan"];
echo "<br>";
echo $arr1['sm'];
echo $arr1[8];


// printing using for each loop
foreach ($arr1 as $key => $value)
 {
    echo "favourite color of $key is $value";
    echo "<br>";    
}


?>