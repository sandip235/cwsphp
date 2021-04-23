<?php

// require compansulary require the page, if not found gives error and will not excutes further.
//if any error in _dbconnect.php then it will gives error, it wiill not excutes further.
require '22dbconnect.php';

// if any error occure in _dbconnect.php than it will ignore and excute next line in this file.
include '22dbconnect.php';

echo "<br>is Success or not ?";


// will give the number of character print and also total number of character read
echo "<br>";
$a=readfile('22myfile.txt');

//simply read the file text of myfile.txt
echo "<br>";
readfile('22myfile.txt');


// it can also read html file
echo "<br>";
readfile('22myfile.html');

?>