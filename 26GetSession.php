<?php

session_start();

if(isset($_SESSION['username']))
{

    echo "welcome  ".$_SESSION['username'];

    echo "<br>Your favourite category is ".$_SESSION['fav'];

    echo "<br>";
}
else
{
    echo "<br>Login again";
}

?>