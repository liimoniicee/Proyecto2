<?php

session_start();


if(isset($_POST['submit']))
{



if ( (isset($_POST['usuario'])) || (isset($_POST['contraseña'])) ){

//Prro
    $var_user = $_POST['usuario'];
	//$var_contra = $_POST['contraseña'];
		$var_contra = md5($_POST['contrasena']);

//if(password_verify($var_contra, $userRow['USU_CONTRA'])){
    include'conexion.php';



$query = "SELECT ID_USUARIO,USU_ROLL,USU_APELLIDO_PATERNO,USU_NOMBRE FROM usuarios where USU_USUARIO ='$var_user' and USU_CONTRA = '$var_contra' ";
$resultado = $conn->query($query);


if($resultado->num_rows > 0){

	while($row = $resultado->fetch_assoc()) {
	$var_nombre = $row["USU_NOMBRE"];
	$var_apellidop = $row["USU_APELLIDO_PATERNO"];
	$log_nom = $var_nombre. " ".$var_apellidop;
	$tipo = $row["USU_ROLL"];
	//Aspirantes

if($tipo == 1){
		$_SESSION['clave'] = $row["ID_USUARIO"];
		$_SESSION['tipo'] = $row["USU_ROLL"];//
	    $_SESSION['nombre'] = $var_nombre;
        //echo "<script>alert('Ingresado correctamente!')</script>";
        //echo "<script>window.open('aspirante.php','_self')</script>";
		header("location:aspirante.php");
	}else {
		//echo "<script>alert('Usuario o contraseña invalidos!')</script>";
        //echo "<script>window.open('index.html','_self')</script>";
	}//primer roll


//Coordniador
	if($tipo == 2){
		$_SESSION['clave'] = $row["ID_USUARIO"];
	    $_SESSION['nombre']=$var_nombre;
      $_SESSION['tipo'] = $row["USU_ROLL"];
	      //echo "<script>alert('Ingresado correctamente!')</script>";
        //echo "<script>window.open('coordinador.php','_self')</script>";
         //echo "<script>window.open('perfil_admin.php','_self')</script>";
		header("location:coordinador.php");
	}//primer roll
	if($tipo == 3){
		$_SESSION['clave'] = $row["ID_USUARIO"];
	    $_SESSION['nombre']=$var_nombre;
      $_SESSION['tipo'] = $row["USU_ROLL"];
	      //echo "<script>alert('Ingresado correctamente!')</script>";
        //echo "<script>window.open('coordinador.php','_self')</script>";
         //echo "<script>window.open('user.php','_self')</script>";
		header("location:user.php");
	}//primer roll

//Ingles
		if($tipo == 4){
		$_SESSION['clave'] = $row["ID_USUARIO"];
	    $_SESSION['nombre']=$var_nombre;
      $_SESSION['tipo'] = $row["USU_ROLL"];
		//header("location:ingles.php");
		//echo "<script>alert('Ingresado correctamente al modulo de ingles!')</script>";
        //echo "<script>window.open('ingles.php','_self')</script>";
        header("location:ingles.php");
	}
	if($tipo == 5){
		$_SESSION['clave'] = $row["ID_USUARIO"];
	    $_SESSION['nombre']=$var_nombre;
      $_SESSION['tipo'] = $row["USU_ROLL"];
		//header("location:ingles.php");
		//echo "<script>alert('Ingresado correctamente al modulo de ingles!')</script>";
        //echo "<script>window.open('ingles.php','_self')</script>";
        header("location:admin.php");
        //header("location:perfil_admin.php");
	}//primer roll

    	 }//aqui termina el while

	}else{

    echo "<script>alert('Usuario o contraseña invalidos!')</script>";
        echo "<script>window.open('index.html','_self')</script>";}


	}else{
	header("location:index.html");
	}


} else{
	header("location:index.html");
}


?>
