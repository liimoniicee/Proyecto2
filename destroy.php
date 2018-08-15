<?php

session_start();
$clave=$_SESSION['clave'];
session_destroy('');
header("location: index.html");

?>