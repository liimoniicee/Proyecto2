<?php

//carga y se conecta a la base de datos

$con = mysqli_connect("localhost", "limon", "12345", "interfacedb");

$usuario= "usuario";
$apep= "Limon";
$apem= "Moreno";
$nom= "Jonathan";
$cp= 12345;
$dire= "guaymitas";
$cel= 1313132;
$tel= 31312312;
$col= "san jose";
//$fech= "null";
$lug= "Guadalajara";
$id= 9;

   $statement = mysqli_prepare($con, "UPDATE
   usuarios
   SET
   USU_USUARIO = ?, USU_NOMBRE = ?, USU_CELULAR= ?,
   USU_COLONIA = ?, USU_TELEFONO = ?, USU_DIRECCION = ?,
   USU_LUGAR_NACIMIENTO = ?, USU_CODIGO_POSTAL = ?, USU_APELLIDO_PATERNO = ?,
   USU_APELLIDO_MATERNO = ?
   WHERE
   ID_USUARIO = ?;");

   mysqli_stmt_bind_param($statement, "ssisississi", $usuario, $nom, $cel, $col, $tel, $dire, $lug, $cp, $apep, $apem, $id);

   mysqli_stmt_execute($statement);

   //mysqli_stmt_store_result($statement);
   //mysqli_stmt_bind_result($statement, $userID, $username, $password, $apep, $apem, $name, $dire, $col, $cp, $tel, $cel, $nac, $fech, $sex);

   $response = array();
   $response["success"] = true;

   /*while(mysqli_stmt_fetch($statement)){
       $response["success"] = true;
       $response["USU_USUARIO"] = $username;
       $response["USU_CONTRA"] = $password;
       $response["USU_APELLIDO_PATERNO"] = $apep;
       $response["USU_APELLIDO_MATERNO"] = $apem;
       $response["USU_NOMBRE"] = $name;
       $response["USU_DIRECCION"] = $dire;
       $response["USU_COLONIA"] = $col;
       $response["USU_CODIGO_POSTAL"] = $cp;
       $response["USU_TELEFONO"] = $tel;
       $response["USU_CELULAR"] = $cel;
       $response["USU_LUGAR_NACIMIENTO"] = $nac;
       $response["USU_FECHA_NAC"] = $fech;
       $response["USU_SEXO"] = $sex;
   }
*/
   echo json_encode($response);
?>
