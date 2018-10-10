<head>

  <head>
    <!-- Bootstrap core CSS     -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

   <!--  Paper Dashboard core CSS    -->
   <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


   <!--  CSS for Demo Purpose, don't include it in your project     -->
   <link href="assets/css/demo.css" rel="stylesheet" />

   </head>

  <!-- Sweet Alert 2 plugin -->
  <script src= "assets/js/sweetalert2.js"></script>

<?php

session_start();


if(isset($_POST['submit']))
{



if ( (isset($_POST['usuario'])) || (isset($_POST['contrasena'])) ){

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
		header("location:checkin_cord.php");
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
        header("location:checkin2.php");
	}
	if($tipo == 5){
		$_SESSION['clave'] = $row["ID_USUARIO"];
	    $_SESSION['nombre']=$var_nombre;
      $_SESSION['tipo'] = $row["USU_ROLL"];
		//header("location:ingles.php");
		//echo "<script>alert('Ingresado correctamente al modulo de ingles!')</script>";
        //echo "<script>window.open('ingles.php','_self')</script>";
        header("location:checkin.php");
        //header("location:perfil_admin.php");
	}//primer roll

    	 }//aqui termina el while

	}else{
   ?>
    <body>
    <script>
  swal({
  title: "Error!",
  text: "Usuario y/o contraseña incorrecto",
  type: "error"
  }).then(function() {
  // Redirect the user
  window.location.href = "index.html";
  console.log('The Ok Button was clicked.');
  });
        </script>
</body>
    <?php

}

	}else{
	header("location:index.html");
	}


} else{
	header("location:index.html");
}

?>

<script src= "assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src= "assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src= "assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src= "assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src= "assets/js/jquery.validate.min.js"></script>



<!-- Vector Map plugin -->
<script src= "assets/js/jquery-jvectormap.js"></script>



<!-- Wizard Plugin    -->
<script src= "assets/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src= "assets/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src= "assets/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src= "assets/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src= "assets/js/paper-dashboard.js?v=1.2.1"></script>

  <!--   Sharrre Library    -->
  <script src= "assets/js/jquery.sharrre.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
