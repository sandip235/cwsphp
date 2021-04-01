<?php
echo "Let's connect with database and insert data into data table";

// To connect with database
$servername="localhost";
$username="root";
$password="";
$database="db_sandip1";

// Create connection with PHP MyAdmin
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


// Insert data into Data Table

$sql ="INSERT INTO `my_tb1` (`no`, `name`) VALUES ('3', '3rdInsert');";
$result=mysqli_query($conn,$sql);

// Check that data inserted or not ?
if(!$result)
{
    echo "<br>data not inserted";

}
else
{
    echo "<br>data inserted successfully... insertion success";
}


?>