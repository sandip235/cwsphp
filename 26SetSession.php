<?php

//session used to manage information across diff web pages
session_start();

$_SESSION['username']="sm";
$_SESSION['fav']="books";

echo "we have saved your session";



?>