<?php

$servername="localhost";
$username="root";
$password="";
$database="dbform";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo "<br>Connection is successful";
}
else
{
    echo "<br>Not Success... Check your code";
}

?>