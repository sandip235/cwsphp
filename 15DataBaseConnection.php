<?php

echo "Let's connect with database";

// To connect with database
$servername="localhost";
$username="root";
$password="";

// Create connection
$conn= mysqli_connect($servername,$username,$password);

// Die if connection will not successful
if(!$conn)
{
    die("<br><br>connection failed<br>".mysqli_connect_error());
}
else
{

    echo "<br> connection is successfull";
}


//Create Database
$sql="create database db_sandip";

$result=mysqli_query($conn,$sql);

// Check that database created or not ?
if(!$result)
{
    echo "<br>db not created";

}
else
{
    echo "<br>db created success";
}
// echo "the result is:";
// echo var_dump($result);
// echo "<br>";

?>