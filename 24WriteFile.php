<?php
echo "<br>Write file in PHP";

// in write file mode, it will create new file
// everytime when you reload
$fptr=fopen("22myfileW2.txt","w");

fwrite($fptr,"This is sample added from visual code");




//in append mode, it will add the content at the end of file
$fptr2=fopen("22myfileW2.txt","a");
fwrite($fptr2,"<br> this is appended text");
fwrite($fptr2,"<br>another text");
?>