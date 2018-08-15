<?php

//carga y se conecta a la base de datos

$con = mysqli_connect("localhost", "limon", "12345", "interfacedb");


   //$clave = $_POST["id"];
   $team = "";
 $clave = "12";

   $statement = mysqli_prepare($con, "SELECT U.USU_NOMBRE, E.EQU_NOMBRE_EQUIPO
   FROM
   usuarios U, equipos E, becario B
   WHERE
   E.EQU_NOMBRE_EQUIPO in (SELECT E.EQU_NOMBRE_EQUIPO
   FROM
   usuarios U, equipos E, becario B
   WHERE
   U.ID_USUARIO = $clave
   AND
   B.BEC_ID_USUARIO = U.ID_USUARIO AND E.EQU_ID_BECARIO = B.ID_BECARIO)
   AND
   B.BEC_ID_USUARIO = U.ID_USUARIO
   AND
   E.EQU_ID_BECARIO = B.ID_BECARIO;");
   mysqli_stmt_bind_param($statement, "i", $clave);
   mysqli_stmt_execute($statement);

   mysqli_stmt_store_result($statement);
   mysqli_stmt_bind_result($statement, $name_user);

   $response = array();
   $response["success"] = false;

   while(mysqli_stmt_fetch($statement)){
       $response["success"] = true;
       $response["USU_NOMBRE"] = $name_user;
       $response["EQU_NOMBRE_EQUIPO"] = $team;

   }

   echo json_encode($response);
?>
