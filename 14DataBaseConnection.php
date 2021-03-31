<?php

echo "Lec's connect with database";

$servername="localhost";
$username="root";
$password="";

$conn= mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("<br><br>connection failed<br>".mysqli_connect_error());
}
else
{

    echo "<br> connection is successfull";
}

?>