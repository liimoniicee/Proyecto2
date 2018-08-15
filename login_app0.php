<?php

//carga y se conecta a la base de datos

$con = mysqli_connect("localhost", "root", "", "mydb4");


   $username = $_POST["user"];
   $password = $_POST["pass"];

   $statement = mysqli_prepare($con, "SELECT ID_USUARIO, USU_USUARIO, USU_CONTRA,
                                            USU_APELLIDO_PATERNO, USU_APELLIDO_MATERNO, USU_NOMBRE,
                                             USU_DIRECCION, USU_COLONIA, USU_CODIGO_POSTAL, USU_TELEFONO,
                                             USU_CELULAR, USU_LUGAR_NACIMIENTO, USU_FECHA_NAC,
                                             USU_SEXO FROM usuarios WHERE USU_USUARIO = ? AND USU_CONTRA = ?");
   mysqli_stmt_bind_param($statement, "ss", $username, $password);
   mysqli_stmt_execute($statement);

   mysqli_stmt_store_result($statement);
   mysqli_stmt_bind_result($statement, $userID, $username, $password, $apep, $apem, $name, $dire, $col, $cp, $tel, $cel, $nac, $fech, $sex);

   $response = array();
   $response["success"] = false;

   while(mysqli_stmt_fetch($statement)){
       $response["success"] = true;
       $response["ID_USUARIO"] = $userID;
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

   echo json_encode($response);
?>
