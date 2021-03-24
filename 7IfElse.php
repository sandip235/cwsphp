<?php
$a=7;

// If else Conditions
if($a>70)
{
    echo "a is bigger than 70";
}
else
{
    echo "a is not bigger than 70";
}

echo "<br>";
$age=75;
if($age>=25 && $age<=65)
{
    echo "You are allowed for driving";
}
else
{
    echo "Not allowed";
}

echo "<br>";
echo "234234"."<br>" ."sdfsdf";

// While loops
$i=0;

while($i<11)
{
    echo $i;
    $i++;
    echo "<br>";
}


// For Loops
for($index=0;$index<=5;$index++)
{
        echo "index value is $index";
        echo "<br>";
}

echo "<br>";
// For Loop
$ar=array("banana","bread","butter","basket");

for ($i=0; $i <count($ar) ; $i++) 
{ 
    echo $ar[$i];
    echo "<br>";
}


// ForEach Loop
echo "Using for each loop<br>";
foreach ($ar as  $value) 
{
    echo $value;
    echo "<br>";
}

?>