<?php

$fptr=fopen("22myfile.txt","r");

// echo fgets($fptr);
// echo fgets($fptr);
// echo fgets($fptr);

//print line by line
// while($a=fgets($fptr))
// {
//     echo $a;
    
    
// }

//print character by character
 while($b=fgetc($fptr))
 {
     echo $b;
        if($b=="T")
        {
            break;
        }
 }    

?>