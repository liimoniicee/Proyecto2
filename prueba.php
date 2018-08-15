<?php
$mysqli = new mysqli("localhost:3308", "root", "", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT Name FROM City where ID < 4";
$r1 = "";
$r2 = "";
$r3 = "";

$res = $mysqli->query($consulta) or die("error: ".$consulta);

$r1= mysqli_fetch_array($res);

$r2= mysqli_fetch_array($res);


echo $r1[1];
echo $r2[2];
?>
