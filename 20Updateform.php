<?php

// Connecting to Database
$servername="localhost";
$username="root";
$password="";
$database="dbform";

// Create Connection
$conn=mysqli_connect($servername,$username,$password,$database);
// Connection checking

if(!conn)
{
    echo "connection not created";
}
else
{
    echo "Connection successful";
}

$sql="";
$result=mysqli_query($conn,$sql);

if(!$result)
{
    echo "Not Updated";
}
else
{
    echo "Updated Successfully !!";
}





?>