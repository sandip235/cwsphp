<?php

echo "welcome to multi dimentional array<br>";

// Creating two dimentional Array
$multiDim=array(
    array(3,45,23,1),
    array(12,95,53,8),
    array(35,454,232,13),
);


echo var_dump($multiDim);
echo "<br>";

echo var_dump($multiDim[0][0]);
echo "<br>";
echo var_dump($multiDim[0][1]);
echo "<br>";
for ($i=0; $i <count($multiDim) ; $i++)
{
    echo var_dump($multiDim[$i]); 
    echo "<br>";
    # code...
}

echo "<br>";

for ($i=0; $i <count($multiDim) ; $i++)
{
    for($j=0; $j < count($multiDim[$i]); $j++)
    { 
        
        echo $multiDim[$i][$j];
        echo " "; 
    }
    echo "<br>";
    
    # code...
}



?>