<?php

// Connecting to Database
$servername="localhost";
$username="root";
$password="";
$database="dbform";

// Create Connection
$conn=mysqli_connect($servername,$username,$password,$database);
// Connection checking

if(!$conn)
{
    echo "<br>connection not created";
}
else
{
    echo "<br>Connection successful";
}

$sql="select * from `f_tb1`";
$result=mysqli_query($conn,$sql);

$num=mysqli_num_rows($result);
echo "<br>".$num;

echo "records fetch successfully....<br>";
if($num>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row['id'].$row['name'].$row['email'].$row['dsc'];
    }
}

echo "<br>Fetch Complete----------------------<br>";
// Usage of WHERE Clause to Update Data
$sql1 = "UPDATE `f_tb1` SET `name` = 'FromBihar' WHERE `id` = 4";
$result1 = mysqli_query($conn, $sql1);
echo var_dump($result1);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>";

if($result)
{
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully";
}




?>