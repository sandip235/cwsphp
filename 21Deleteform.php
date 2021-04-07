<?php

$servername="localhost";
$username="root";
$password="";
$database="dbform";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database);

if($conn)
{
    echo "<br>connection established";
}
else
{
    echo "<br>connection failed".mysqli_connect_error();
}

//Excecute Sql query
$sql="delete from f_tb1 where id=1";
$result=mysqli_query($conn,$sql);

if($result)
{
    echo "<br>Record deleted successfully";
}
else
{
    echo "<br>Not deteled";





    
}


?>