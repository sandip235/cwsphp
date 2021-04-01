<?php
echo "Welcome to the stage where we can connect to Database...<br>";

// Ways to connect MySql Database
// 1.MySQLi Extention  2. PDO 

// connecting to database
$servername="localhost";
$username="root";
$password=" ";

//create connection
$conn= mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("Sorry... connnecton failed...".mysqli_connect_error());
}

echo "connection is successful...";

?>