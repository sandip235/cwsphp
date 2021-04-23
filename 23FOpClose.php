

<?php
$fptr=fopen("22myfile.txt","r");

if(!$fptr)
{
    die("Unable to open...enter valid file name");
}

$content=fread($fptr,filesize("22myfile.txt"));
fclose($fptr);

echo $content;

?>