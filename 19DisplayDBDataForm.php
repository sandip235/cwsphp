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




//Fatching Records
$sql= "SELECT * FROM `f_tb1`";
$result=mysqli_query($conn,$sql);
echo "<br>";
$test=var_dump($result);

if(!$result)
{
    echo "<br>Not executed<br>";
}
else
{
    echo "<br> Successfully executed<br>";
}

// Find the number of records received
//$num=mysqli_num_rows($result);
// $num = mysqli_num_rows($result);
// echo $num;

$num=mysqli_num_rows($result);
echo "<br>Total Rows:".$num;

// Total no of record time we have to write the code
if($num>0)
{
    $row=mysqli_fetch_assoc($result);
    echo "<br>".var_dump($row);
    echo "<br>";

    $row=mysqli_fetch_assoc($result);
    echo "<br>".var_dump($row);
    echo "<br>";
}

echo "By While Loop <br>";

// We can fetch in a better way using the while loop
while($row = mysqli_fetch_assoc($result))
{
    // echo var_dump($row);
    echo $row['id'] .  ". Hello ". $row['name'] ." Welcome to ". $row['email'].$row['dsc'].$row['dt'];
    echo "<br>";
}





?>