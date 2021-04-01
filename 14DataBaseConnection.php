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

?>