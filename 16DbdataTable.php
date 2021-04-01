<?php

echo "Let's connect with database and Create Data Table";

// To connect with database
$servername="localhost";
$username="root";
$password="";
$database="db_sandip1";

// Create connection
$conn= mysqli_connect($servername,$username,$password,$database);

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
// $sql="create database db_sandip";

// $result=mysqli_query($conn,$sql);

// Create Database Table
$sql ="CREATE TABLE `db_sandip1`.`my_tb3` ( `no1` INT(11) NOT NULL , `name1` VARCHAR(11) NOT NULL )";
$result=mysqli_query($conn,$sql);

// Check that data table created or not ?
if(!$result)
{
    echo "<br>table not created";

}
else
{
    echo "<br>table created success";
}

?>