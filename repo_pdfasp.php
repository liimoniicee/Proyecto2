<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
 //variables
 $var_name=$_SESSION['nombre'];
 $var_clave= $_SESSION['clave'];
 $var_tipo = $_SESSION['tipo'];

 if($var_tipo != 2) {
  //echo "<script>alert('No tienes acceso a esta página!')</script>";
    //echo "<script>window.open('index.html','_self')</script>";
    header("Location: error509.html");
  }


include 'plantila_repo.php';
include 'conexion.php';

$id=$_POST['swal-input0'];

$sql = " SELECT USU_USUARIO,USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO FROM  usuarios WHERE ID_USUARIO= '$id' ";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {

    while ($row= $resultado->fetch_assoc()) {

          $var_correo     =     $row['USU_USUARIO'];
          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];

  }

} else {

  }

ob_start ();
  $pdf = new PDF();
 // $pdf->AliasPages();
  $pdf->AddPage();


  $pdf->SetFont('Helvetica','B',10);


  //PRIMERA PARTE DEL FORMULARIO

  //CABECERA
  $pdf->SetXY(10,70);
  $pdf->SetFillColor(232,232,232);
  $pdf->Cell(190, 6, 'INFORMACION DEL ESTUDIANTE', 0, 1, 'L', True);
  $pdf->SetFont('Helvetica','B',10);
               // Largo  alto    texto              borde  aling  fill
   $pdf->MultiCell(20    ,5   ,'Apellido Paterno:',  0,     'L',    0);
   $pdf->SetXY(30,76);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->Cell(50, 10, $var_apellidop, 0, 1, 'L');
   //Apellido Materno
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(80,76);
   $pdf->MultiCell(20 ,5 ,'Apellido Materno:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(100,76);
   $pdf->Cell(50, 10, $var_apellidom, 0, 1, 'L');
   //Nombres
    $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(150,76);
   $pdf->MultiCell(20 ,10 ,'Nombre(s):' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(170,76);
   $pdf->Cell(30, 10,$var_nombre, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,86);
   $pdf->MultiCell(20 ,10 ,'Direccion:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(30,86);
   $pdf->Cell(120, 10, $var_direccion, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(150,86);
   $pdf->MultiCell(20 ,10 ,'Colonia:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(170,86);
   $pdf->MultiCell(30 ,5 ,$var_colonia ,0,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,96);
   $pdf->MultiCell(20 ,5 ,'Codigo Postal:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(30,96);
   $pdf->Cell(20, 10, $var_codigopost, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(50,96);
   $pdf->MultiCell(20 ,10 ,'Telefono:' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(70,96);
   $pdf->Cell(30, 10, $var_telefono, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(100,96);
   $pdf->MultiCell(25 ,5 ,'Correo Electronico:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(125,96);
   $pdf->MultiCell(75,10 ,$var_correo ,0,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,106);
   $pdf->MultiCell(40 ,10 ,'Lugar de Nacimiento:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(50,106);
   $pdf->Cell(50, 10, $var_lugarnac, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(100,106);
   $pdf->MultiCell(25 ,10 ,'Celular:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(125,106);
   $pdf->MultiCell(30,10 ,$var_celular ,0,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(155,106);
   $pdf->MultiCell(15 ,10 ,'Sexo:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(170,106);
   $pdf->MultiCell(30,10 ,$var_sexo,0,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,116);
   $pdf->MultiCell(40 ,10 ,'Fecha de Nacimiento:' ,0,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(50,116);
   $pdf->Cell(150, 10, $var_fechanac, 0, 1, 'L');

//PARA OBTENER EL ID DEL ASPIRANTE
$sql1 = " SELECT ID_ASPIRANTES FROM aspirantes WHERE ASP_ID_USUARIO = '$id' ";

$resultado = $conn->query($sql1);

if ($resultado->num_rows > 0) {

    while ($row= $resultado->fetch_assoc()) {

          $var_idasp = $row['ID_ASPIRANTES'];
  }

} else {

        }


//PARA GENERAR LA CONSULTA CON EL ID DEL ASPIRANTE
 $sql2 = "  SELECT FAM_PARENTESCO,FAM_APELL_PATERNO,FAM_APELLIDO_MATERNO,FAM_NOMBRE,FAM_OCUPACION,FAM_LUGAR_TRABAJO,FAM_ING_FORMAL,FAM_ING_INFORMAL FROM datos_familiares WHERE FAM_ID_ASPIRANTES = '$var_idasp' AND FAM_PARENTESCO= 'PADRE' ";

$resultado = $conn->query($sql2);

if ($resultado->num_rows > 0) {

    while ($row= $resultado->fetch_assoc()) {
          $var_paterno = $row['FAM_APELL_PATERNO'];
          $var_materno = $row['FAM_APELLIDO_MATERNO'];
          $var_nombrep = $row['FAM_NOMBRE'];
          $var_ocupacion= $row['FAM_OCUPACION'];
          $var_lugar_trabajo= $row['FAM_LUGAR_TRABAJO'];
          $var_ingreso_formal=$row['FAM_ING_FORMAL'];
          $var_ingreso_informal=$row['FAM_ING_INFORMAL'];
  }

} else {

        }

    //INFORMACION DEL PAPA
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,126);
   $pdf->Cell(30, 10, 'Info.del Padre', 0, 1, 'L',True);
  // $pdf->MultiCell(40 ,10 ,'Info.del Padre:' ,1,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(40,126);
   $pdf->MultiCell(20 ,5 ,'Apellido Paterno:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(60,126);
   $pdf->MultiCell(30,10 ,$var_paterno,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(90,126);
   $pdf->MultiCell(20 ,5 ,'Apellido Materno:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(110,126);
   $pdf->MultiCell(30,10 ,$var_materno,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(140,126);
   $pdf->MultiCell(20 ,10 ,'Nombre:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,126);
   $pdf->MultiCell(40,10 ,$var_nombrep,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,136);
   $pdf->MultiCell(50 ,10 ,'Ocupacion:' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(60,136);
   $pdf->Cell(60, 10, $var_ocupacion, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(120,136);
   $pdf->MultiCell(40 ,10 ,'Lugar de Trabajo:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,136);
   $pdf->MultiCell(40,10 ,$var_lugar_trabajo,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,146);
   $pdf->MultiCell(50 ,10 ,'Ingreso Formal:' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(60,146);
   $pdf->Cell(60, 10,'$'.$var_ingreso_formal, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(120,146);
   $pdf->MultiCell(40 ,10 ,'Ingreso Informal:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,146);
   $pdf->MultiCell(40,10 ,'$'.$var_ingreso_informal,0 ,'L' ,0);


$sql3 = "  SELECT FAM_PARENTESCO,FAM_APELL_PATERNO,FAM_APELLIDO_MATERNO,FAM_NOMBRE,FAM_OCUPACION,FAM_LUGAR_TRABAJO,FAM_ING_FORMAL,FAM_ING_INFORMAL FROM datos_familiares WHERE FAM_ID_ASPIRANTES = '$var_idasp' AND FAM_PARENTESCO= 'MADRE' ";

$resultado = $conn->query($sql3);

if ($resultado->num_rows > 0) {

    while ($row= $resultado->fetch_assoc()) {

          $var_paternom           = $row['FAM_APELL_PATERNO'];
          $var_maternom           = $row['FAM_APELLIDO_MATERNO'];
          $var_nombrem            = $row['FAM_NOMBRE'];
          $var_ocupacionm         = $row['FAM_OCUPACION'];
          $var_lugar_trabajom     = $row['FAM_LUGAR_TRABAJO'];
          $var_ingreso_formalm    = $row['FAM_ING_FORMAL'];
          $var_ingreso_informalm  = $row['FAM_ING_INFORMAL'];
  }

} else {

        }

 //INFORMACION MAMA
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,156);
   $pdf->Cell(30, 10, 'Info. de la Madre', 0, 1, 'L',True);
  // $pdf->MultiCell(40 ,10 ,'Info.del Padre:' ,1,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(40,156);
   $pdf->MultiCell(20 ,5 ,'Apellido Paterno:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(60,156);
   $pdf->MultiCell(30,10 , $var_paternom,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(90,156);
   $pdf->MultiCell(20 ,5 ,'Apellido Materno:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(110,156);
   $pdf->MultiCell(30,10 , $var_maternom,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(140,156);
   $pdf->MultiCell(20 ,10 ,'Nombre:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,156);
   $pdf->MultiCell(40,10 ,$var_nombrem,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,166);
   $pdf->MultiCell(50 ,10 ,'Ocupacion:' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(60,166);
   $pdf->Cell(60, 10, $var_ocupacionm , 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(120,166);
   $pdf->MultiCell(40 ,10 ,'Lugar de Trabajo:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,166);
   $pdf->MultiCell(40,10 ,$var_lugar_trabajom  ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,176);
   $pdf->MultiCell(50 ,10 ,'Ingreso Formal:' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(60,176);
   $pdf->Cell(60, 10,'$'.$var_ingreso_formalm  , 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(120,176);
   $pdf->MultiCell(40 ,10 ,'Ingreso Informal:',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(160,176);
   $pdf->MultiCell(40,10 ,'$'.$var_ingreso_informalm,0 ,'L' ,0);


 //CONSULTAR DATOS GENERALES
$sql4 = " SELECT GEN_TIEMPO_RESI,GEN_CASA_PROP,GEN_DESCRP_CASA,GEN_AUTO,GEN_PERSONAS_FAMILIA,GEN_PERSONAS_CASA,GEN_BANCARIAS,GEN_ESTADO_CUENTA,GEN_TRABAJO,GEN_TIPO_BECA,GEN_INTERNET,GEN_HABLAR_ING,GEN_PORCENTAJE FROM datos_generales WHERE GEN_ID_ASPIRANTES = '$var_idasp' ";

$resultado = $conn->query($sql4);

if ($resultado->num_rows > 0) {

    while ($row= $resultado->fetch_assoc()) {

          $var_residencia             = $row['GEN_TIEMPO_RESI'];
          $var_casa_prop              = $row['GEN_CASA_PROP'];
          $var_descrip_casa           = $row['GEN_DESCRP_CASA'];
          $var_auto                   = $row['GEN_AUTO'];
          $var_personas_fam           = $row['GEN_PERSONAS_FAMILIA'];
          $var_personas_casa          = $row['GEN_PERSONAS_CASA'];
          $var_bancarias              = $row['GEN_BANCARIAS'];
          $var_estado_cuenta          = $row['GEN_ESTADO_CUENTA'];
          $var_trabajo                = $row['GEN_TRABAJO'];
          $var_tipo_beca              = $row['GEN_TIPO_BECA'];
          $var_internet               = $row['GEN_INTERNET'];
          $var_hablar_ingles          = $row['GEN_HABLAR_ING'];
          $var_porcent                = $row['GEN_PORCENTAJE'];


  }

} else {

        }

   //INOFORMACION GENERAL
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,186);
   $pdf->MultiCell(100 ,10 ,'¿Desde hace cuanto tiempo vives en Cabo San Lucas? ' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(110,186);
   $pdf->Cell(90, 10,$var_residencia, 0, 1, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,196);
   $pdf->MultiCell(50 ,10 ,'¿Tienes casa propia?' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(60,196);
   $pdf->Cell(30, 10,$var_casa_prop, 0, 0, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(90,196);
   $pdf->MultiCell(60 ,5 ,'Describe los Materiales que está construida tu casa',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(150,196);
   $pdf->MultiCell(50,10 ,$var_descrip_casa,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(10,206);
   $pdf->MultiCell(60 ,10 ,'¿Tu o tu familia tienen carros?' ,0 ,'L' ,0);
   $pdf->SetFont('Helvetica','I',10);
   $pdf->SetXY(70,206);
   $pdf->Cell(20, 10, $var_auto, 0, 0, 'L');
   $pdf->SetFont('Helvetica','B',10);
   $pdf->SetXY(90,206);
   $pdf->MultiCell(60 ,5 ,'¿Cuantas personas forman tu familia?',0 ,'L' ,0);
   $pdf->SetFont('Helvetica','i',10);
   $pdf->SetXY(150,206);
   $pdf->MultiCell(50,10 ,$var_personas_fam,0 ,'L' ,0);










   $pdf->output();
   ob_end_flush();



?>
