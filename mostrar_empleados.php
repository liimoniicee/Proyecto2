
<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
?>


<?php

include 'conexion.php';

 $id_usuarios = $_SESSION["clave"];
 $sql = "SELECT USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_IMG_PERFIL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO,USU_USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_usuarios' ";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {

          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];
          $var_usu        =     $row['USU_USUARIO'];
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Team Interface</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css?v=1.2.1" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-background-color="brown" data-active-color="danger">
        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->
            <div class="logo">
                <a href="aspirante.php" class="simple-text logo-mini">
                    CT
                </a>

                <a href="aspirante.php" class="simple-text logo-normal">
                      SCHOOLAR
                </a>
            </div>
            <div class="sidebar-wrapper">

    						<div class="user">
    								<div class="info">
    										<div class="photo">
    												<img src="<?php echo $var_foto ?>" />
    										</div>

    										<a data-toggle="collapse" href="#collapseExample" class="collapsed">
    												<span>
    														<?php echo $_SESSION['nombre'];?>
    														<b class="caret"></b>
    												</span>
    										</a>
    										<div class="clearfix"></div>

    										<div class="collapse" id="collapseExample">
    												<ul class="nav">
    														<li>
    																<a href="">
    																		<span class="sidebar-mini"></span>
    																		<span class="sidebar-normal">c</span>
    																</a>
    														</li>
    												</ul>
    										</div>
    								</div>
    						</div>

    						<ul class="nav">
                    <li >
                        <a href="admin2.php" aria-expanded="true">
                            <i class="ti-panel"></i>
                            <p>Dashboard
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="perfil_admin.php">
                            <i class="ti-user"></i>
                            <p>Perfil
                            </p>
                        </a>
                    </li>
                   <!-- <li>
                        <a href="agenda.php">
                            <i class="ti-calendar"></i>
                            <p>
                                Agenda
                            </p>
                        </a>
                    </li>-->
    								<li>
    								<a data-toggle="collapse" href="#tablesExamples">
    										<i class="ti-agenda"></i>
    										<p>
    												Control de empleados
    											 <b class="caret"></b>
    										</p>
    								</a>
    								<div class="collapse in" id="tablesExamples" aria-expanded="true">
    										<ul class="nav">
    												<li>
    														<a href="registro_empleados.php">
    																<span class="sidebar-mini"></span>
    																<span class="sidebar-normal">Agregar empleados</span>
    														</a>
    												</li>

    												 <li class="active" >
    														<a href="mostrar_empleados.php">
    																<span class="sidebar-mini"></span>
    																<span class="sidebar-normal">Mostrar empelados </span>
    														</a>
    												</li>
    										</ul>
    								</div>


    						</li>
                    <li>
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="false">
                            <i class="ti-book"></i>
                            <p>Gestion de Equipos
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="dashboardOverview">
                            <ul class="nav">
                                <li class="active">
                                    <a href="teams.php">
                                        <span class="sidebar-mini">E</span>
                                        <span class="sidebar-normal">Equipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="asignarequipos.php">
                                        <span class="sidebar-mini">A</span>
                                        <span class="sidebar-normal">Asignar Equipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="crearequipos.php">
                                        <span class="sidebar-mini">C</span>
                                        <span class="sidebar-normal">Crear Equipos</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="editarequipos.php">
                                        <span class="sidebar-mini">E</span>
                                        <span class="sidebar-normal">Editar Equipos</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="borrarequipos.php">
                                        <span class="sidebar-mini">B</span>
                                        <span class="sidebar-normal">Borrar Equipos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                  <!--  <li>
                        <a href="assets/db/logout.php">
                            <i class="ti-book"></i>
                            <p>Cerrar Sesion</p>
                        </a>
                    </li> -->

                </ul>
    				</div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#Dashboard">
                           Administrador
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">



                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p><?php echo "Bienvenido: ".$_SESSION['nombre'];?></p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <span class="notification">5</span>
                                    <p class="hidden-md hidden-lg">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#not1">Notification 1</a></li>
                                    <li><a href="#not2">Notification 2</a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate" onclick="demo.showSwal('warning-message-and-confirmation')">
                                   <i class="ti-settings" ></i>
                                <p>logout</p>

                                <!--onclick="demo.showSwal('warning-message-and-confirmation')"-->
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
















<?php

include 'conexion.php';

 $id_usuarios = $_SESSION["clave"];
 $sql = "SELECT USU_APELLIDO_PATERNO,USU_APELLIDO_MATERNO,USU_NOMBRE,USU_DIRECCION,USU_COLONIA,USU_CODIGO_POSTAL,USU_IMG_PERFIL,USU_TELEFONO,USU_CELULAR,USU_LUGAR_NACIMIENTO,USU_FECHA_NAC,USU_SEXO,USU_USUARIO FROM USUARIOS WHERE ID_USUARIO = '$id_usuarios' ";
 $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
         while ($row= $resultado->fetch_assoc()) {

          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];
          $var_usu        =     $row['USU_USUARIO'];
        }

    }   else {
echo "¡ No se ha encontrado ningún registro !";
}

?>


<script>
function validar(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números
//patron = /[\w\s]/; // Acepta números y letras
//patron = /\D/; // No acepta números
//

te = String.fromCharCode(tecla);
return patron.test(te);
}
</script>
<!-- onkeypress="return validar(event)"-->
<script>
function validar2(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
//patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
//patron = /\d/; // Solo acepta números
//patron = /\w/; // Acepta números y letras
patron = /[\w\s]/;// Acepta números y letras y espacio
//patron = /\D/; // No acepta números
//

te = String.fromCharCode(tecla);
return patron.test(te);
}
</script>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                     <div class="card">
                    <div class="content">


<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="title">Mostrar Usuarios</h4>


                            <br>

                            <div class="card">
                                <div class="card-content">
                                    <div class="toolbar">
                                        <!--Here you can write extra buttons/actions for the toolbar-->
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                            <tr>

                                                <th>Id_Usuario</th>
                                                <th>Correo</th>
                                                <th>Roll</th>
                                                <th>Apellido P</th>
                                                <th>Apellido M</th>

                                                <th class="disabled-sorting">Acciones</th>
                                            </tr>
                                        </thead>

      <tfoot>
                                            <tr>

                                                  <th>Id_Usuario</th>
                                                <th>Correo</th>
                                                <th>Roll</th>
                                                <th>Apellido P</th>
                                                <th>Apellido M</th>
                                            </tr>
                                        </tfoot>


                                        <?php

            include 'conexion.php';
            $consulta = "SELECT * FROM usuarios";

            $ejecutar = mysqli_query($conn, $consulta);

            $i = 0;

            while($row=mysqli_fetch_array($ejecutar)){
                 $id_c       =     $row['ID_USUARIO'];
          $var_usu       =     $row['USU_USUARIO'];
          $var_contra      =    $row['USU_CONTRA'];
          $var_roll       =     $row['USU_ROLL'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          $var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_nombre     =     $row['USU_NOMBRE'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_foto       =     $row['USU_IMG_PERFIL'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];
          $var_sexo       =     $row['USU_SEXO'];


                $i++;

        ?>



                                     <tbody>
                                            <tr>

                                                <!--<td><?php echo $id_c; ?></td>-->
                                                <td><?php echo  $id_c; ?></td>
                                                <td><?php echo $var_usu; ?></td>
                                                <td><?php echo $var_roll ?></td>
                                                <td><?php echo $var_apellidop ?></td>
                                                 <td><?php echo $var_apellidom ?></td>
                                                <td>
                                                    <a href="registro_empleados.php" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                                    <button onclick="alerta(<?php echo $id_c ?>), enviarmod(<?php echo $id_c ?>);" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></button>
                                                    <!--<a href="editar_usuarios.php?editar=<?php echo $id_c; ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>-->
                                                    <button onclick="borrar(<?php echo $id_c ?>)" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a></button>
                                                    <!--<a href="mostrar_empleados.php?borrar=<?php echo $id_c; ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>-->

                                                </t >



                                             <!--   no=".$fila['CAL_NIVEL_INGLES']."-->
                                            </tr>

   <!--<?php
 include 'conexion.php';
        if(isset($_GET['editar'])){
        include("editar_usuarios.php");
        }
    ?>
    <?php
     include 'conexion.php';
    if(isset($_GET['borrar'])){

    $borrar_id = $_GET['borrar'];

    $borrar = "DELETE FROM usuarios WHERE ID_USUARIO='$borrar_id'";

    $ejecutar = mysqli_query($conn,$borrar);

        if($ejecutar){

        echo "<script>alert('El usuario ha sido borrado!')</script>";
        echo "<script>window.open('mostrar_empleados.php','_self')</script>";
        }

    }

    ?> -->

    <script>
          function enviarmod(id){
            $.ajax({
                // la URL para la petición
                url : 'mod_empleado.php',
                // la información a enviar
                // (también es posible utilizar una cadena de datos)
                data : {
                   id : id
                },
                // especifica si será una petición POST o GET
                type : 'POST',
                // el tipo de información que se espera de respuesta
                dataType : 'json',
                // código a ejecutar si la petición es satisfactoria;
                // la respuesta es pasada como argumento a la función
                success : function(data) {
                  $("#swal-input0").val(data.data.id);
                  $("#swal-input1").val(data.data.nom);
                  $("#swal-input2").val(data.data.mat);
                  $("#swal-input3").val(data.data.vende);
                  $("#swal-input4").val(data.data.canti);
                  $("#swal-input5").val(data.data.apellido_m);
                  $("#swal-input6").val(data.data.nombre1);
                  $("#swal-input7").val(data.data.direcc);
                  $("#swal-input8").val(data.data.col);
                  $("#swal-input9").val(data.data.cp);
                  $("#swal-input10").val(data.data.img);
                  $("#swal-input11").val(data.data.tel);
                  $("#swal-input12").val(data.data.cel);
                  $("#swal-input13").val(data.data.lug_nac);
                  $("#swal-input14").val(data.data.fech);
                  $("#swal-input15").val(data.data.sex);

                },

                // código a ejecutar si la petición falla;
                // son pasados como argumentos a la función
                // el objeto de la petición en crudo y código de estatus de la petición
                error : function(xhr, status) {

                },

                // código a ejecutar sin importar si la petición falló o no
                complete : function(xhr, status) {

                }
            });
          }
          </script>

          <script>
          function borrar(id){
          swal({
             title: '¿Estas seguro?',
             text: "Esta acción no se puede revertir",
             type: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Si, borrar',
             showLoaderOnConfirm: true,
             preConfirm: function() {
               return new Promise(function(resolve) {

                 $.ajax({
                  url: 'borrar_empleado.php',
                  type: 'POST',
                  data: 'delete='+id,
                  dataType: 'json'
               })
               .done(function(response){
                  swal('Deleted!', response.message, response.status);
                location.reload();
               })
               .fail(function(){
                  swal('Oops...', 'Algo salio mal con ajax!', 'error');
               });
               });
             },
             allowOutsideClick: false
          });
          }
          </script>

          <script type="text/javascript">

          function alerta(id){


          swal({
          title: 'Editar empleado',
          html:
          //type="hidden"  ES PARA PCULTAR UN INPUT

          '<form action="actual_empleado" method="post" name="data">'+
         '<input type="hidden" name="swal-input0" id="swal-input0" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Correo</label>' +
          '<input type="email"  name="swal-input1"  id="swal-input1" required class="form-control border-input">' +
          '<label for="exampleInputEmail1">Contraseña</label>' +
          '<input type="password" min="0" name="swal-input2" required  id="swal-input2" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Roll</label>' +
          '<input  type="number" min="0"name="swal-input3" onkeypress="return validar3(event)" required="true" id="swal-input3" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Apellido P</label>' +
          '<input type="text" min="0" name="swal-input4" id="swal-input4" onkeypress="return validar(event)" required="true" onkeypress="return validar(event)" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Apellido M</label>' +
          '<input name="swal-input5" onkeypress="return validar(event)"  required="true" id="swal-input5" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Nombre</label>' +
          '<input type="text" min="0" name="swal-input6" id="swal-input6" required="true" onkeypress="return validar(event)" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Direccón</label>' +
          '<input  type="text" min="0"name="swal-input7" id="swal-input7" required="true" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Colonia</label>' +
          '<input type="text" min="0" name="swal-input8" id="swal-input8" class="form-control border-input">' +
             '<label for="exampleInputEmail1">C.P.</label>' +
          '<input name="swal-input9" onkeypress="return validar(event)" required="true" id="swal-input9" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Img</label>' +
          '<input type="text" min="0" name="swal-input10" id="swal-input10" class="form-control border-input">' +
          '<label for="exampleInputEmail1">telefono</label>' +
          '<input  type="number" min="0"name="swal-input11" id="swal-input11" minlength="7" maxlength="7" required="true" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Celular</label>' +
          '<input type="number" min="0" name="swal-input12" id="swal-input12" minlength="10" maxlength="10" required="true" class="form-control border-input">' +
           '<label for="exampleInputEmail1">Lugar de nacimiento</label>' +
          '<input name="swal-input13" onkeypress="return validar(event)"  required="true" id="swal-input13" class="form-control border-input">' +
          '<label for="exampleInputEmail1">Fecha</label>' +
          '<input type="date" min="0" name="swal-input14" id="swal-input14" required="true" class="form-control border-input" min="1980-01-01" max="2008-12-31"  required>' +
          '<label for="exampleInputEmail1">Sexo</label>' +
          '<input  type="text" min="0"name="swal-input15" id="swal-input15" required="true" class="form-control border-input">' +



          '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Actualizar</Button>'+
          '</form>',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: '</form> Actualizar solicitud',
          cancelButtonClass: 'btn btn-danger btn-fill btn-wd',
          showConfirmButton: false,
          focusConfirm: false,
          buttonsStyling: false,
          reverseButtons: true
          }).then(function (result) {

          swal(
          'Actualizado!',
          'La solicitud ha sido actualizada',
          'success'
          )
          }).catch(swal.noop);

          };
          </script>
                                         <!--   <tr>
                                                    <td><?php echo $nivel; ?></td>
                                                <td><?php echo $calificacion; ?></td>
                                                <td><?php echo $unidad; ?></td>
                                                <td><?php echo $promedio; ?></td>
                                                 <td><?php echo $id; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>
                                                </td>
                                            </tr>
                                             <?php } ?>
                                            <tr>
                                                <td>Angelica Ramos</td>

                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>
                                                    <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>

                                                </td>
                                            </tr> -->

                                           </tbody>

                                        </table>


                                    </div>


                                </div>
                            </div><!--  end card  -->
                        </div> <!-- end col-md-12 -->
                    </div> <!-- end row -->

                </div>
            </div>










            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="http://www.facebook.com">
                                   Facebook
                                </a>
                            </li>
                            <li>
                               <a href="http://gspcabo.com/?page_id=16">
                                   Green Schoolarship
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Interface</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="fixed-plugin">

    </div>

</body>

 <!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Forms Validations Plugin -->
    <script src="assets/js/jquery.validate.min.js"></script>

    <!-- Promise Library for SweetAlert2 working on IE -->
    <script src="assets/js/es6-promise-auto.min.js"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="assets/js/bootstrap-datetimepicker.js"></script>

    <!--  Select Picker Plugin -->
    <script src="assets/js/bootstrap-selectpicker.js"></script>

    <!--  Switch and Tags Input Plugins -->
    <script src="assets/js/bootstrap-switch-tags.js"></script>

    <!-- Circle Percentage-chart -->
    <script src="assets/js/jquery.easypiechart.min.js"></script>


    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
    <script src="assets/js/jquery-jvectormap.js"></script>


    <!-- Wizard Plugin    -->
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="assets/js/bootstrap-table.js"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="assets/js/jquery.datatables.js"></script>

    <!--  Full Calendar Plugin    -->
    <script src="assets/js/fullcalendar.min.js"></script>

    <!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js?v=1.2.1"></script>




    <script type="text/javascript">
        $(document).ready(function(){
            demo.initOverviewDashboard();
            demo.initCirclePercentage();

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                responsive: true,
                language: {
                search: "_INPUT_",
                    searchPlaceholder: "Buscar registros",
                }
            });


            var table = $('#datatables').DataTable();
             // Edit record
             table.on( 'click', '.edit', function () {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
             } );

             // Delete a record
             table.on( 'click', '.remove', function (e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
             } );

            //Like record
            table.on( 'click', '.like', function () {
                alert('You clicked on Like button');
             });

        });
    </script>

</html>
