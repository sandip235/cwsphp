<?php
echo "welcome to function tutorials"; 

function TotalMarks($Marks)
{
    $sum=0;
    foreach ($Marks as $value)
    {
        $sum=$sum+$value;
    }
    return $sum;
}

function avg($marks)
{
    $sum=0;
    $i=1;
    foreach ($marks as $value) 
    {
        $sum=$sum+$value;
        $i++;
    }
    return $sum/$i;
}

function simplefun()
{
    echo "fun funa fun";
    echo strrev("ehllo");
}

echo "<br>";
simplefun();
echo "<br>";


$rohanMarks=array(25,50,75);
$rohanTot=TotalMarks($rohanMarks);
$rohanAvg=avg($rohanMarks);

echo "Total marks of rohan: $rohanTot";
echo "<br>";
echo "Avg of rohan marks is: $rohanAvg";
?>