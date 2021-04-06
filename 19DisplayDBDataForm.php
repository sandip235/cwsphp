<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbform";

//Create connection
$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Database not connected".mysqli_connect_error());
    echo "failed";
}
else
{
    echo "<br>Successfully connected with Database";
}

echo "<br>outside success";


//Fatching Records
$sql= "select * from 'f_tb1'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "<br>Succesfully executed";
}
else
{
    echo "<br> Not successfully executed";
}

// Find the number of records received
//$num=mysqli_num_rows($result);
// $num = mysqli_num_rows($result);
// echo $num;
echo "records found in the database";

$row=mysqli_fetch_assoc($result);
echo var_dump($row);



?>