<?php
 session_start();
 include 'fuctions.php';
 verificar_sesion();
 //variables
 $var_name=$_SESSION['nombre'];
 $var_clave= $_SESSION['clave'];
 $var_tipo = $_SESSION['tipo'];

 if($var_tipo != 4) {
  //echo "<script>alert('No tienes acceso a esta página!')</script>";
    //echo "<script>window.open('index.html','_self')</script>";
    header("Location: error509.html");
  }
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
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
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
                    <li class="">
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="dashboardOverview">
                            <ul class="nav">
                                <li class="">
                                    <a href="ingles.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                  </li>
                         <li class="">
                        <a href="admin.php" aria-expanded="true">
                            <i class="ti-panel"></i>
                            <p>Control de empleados
                            </p>
                        </a>
                    </li>

                      <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Calificaciones
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">

                               <li>
                                    <a href="calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Tabla de Calificaciones </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="asignar_calificaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Agregar Calificaciones</span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <li class="active">
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard" ></i>

                            <p>
                                Asistencia
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                                <li class="active">
                                    <a href="asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia de Ingles</span>
                                    </a>
                                </li>
                                 <li class="">
                                    <a href="tabla_asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Tabla de asistencias</span>
                                    </a>
                                </li>
                                  <li class="">
                                    <a href="mostrar_asistencia.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Mostrar asistencia</span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </li>
                    <li>

                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">

                                <li>

                                </li>
                            </ul>
                        </div>
                    </li>

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
                           Ingles
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
                                   <li><a href="assets/manual/usuario.pdf">Manual de usuario</a></li>
                                    <li><a href="#not2">Notification 2</a></li>
                                    <li><a href="#not3">Notification 3</a></li>
                                    <li><a href="#not4">Notification 4</a></li>
                                    <li><a href="#another">Another notification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate">
                                   <i class="ti-share-alt"></i>
                                <p>logout</p>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



 <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="title">Asistencias</h4>
                           <!-- <p class="category"><a href="https://datatables.net/" target="_blank">dataTables.net</a> <a href="https://datatables.net/manual/index" target="_blank">full documentation.</a></p>-->
                            <p> Nota: En el apartado de asistencia marcar la casilla con una "palomita"  en caso de asistencia y en caso de que no asistio dejar "vacia" la casilla, una vez finalizado dar clic en guardar.
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
                                                <th>No.Control</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Fecha</th>
                                                <th>Asistencia</th>


                                                <th class="disabled-sorting">Actions</th>
                                            </tr>
                                        </thead>

      <tfoot>
                                            <tr>

                                                <th>No.Control</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                 <th>Fecha</th>
                                                <th>Asistencia</th>


                                            </tr>
                                        </tfoot>

                                        <?php
                                        //Conexón a la base de datos

            include 'conexion.php';
            //Consulta para la informacion de los becarios por medio del id
            $consulta = "SELECT u.USU_NOMBRE, u.USU_APELLIDO_PATERNO, u.ID_USUARIO,
                                b.BEC_ID_USUARIO, b.ID_BECARIO FROM usuarios u, becario b
                                WHERE

                                b.BEC_ID_USUARIO = u.ID_USUARIO";

            $ejecutar = mysqli_query($conn, $consulta);

            $i = 0;
            $fecha_actual=date("d/m/Y");
            while($row=mysqli_fetch_array($ejecutar)){
                /*$id_c          = $fila['ID_CALIFICACIONES'];
                $nivel         = $fila['CAL_NIVEL_INGLES'];
                $calificacion  = $fila['CAL_CALIFICACION'];
                $unidad        = $fila['CAL_UNIDAD'];
                $promedio      = $fila['CAL_PROMEDIO'];
                 $id            = $fila['CAL_ID_BECARIO'];*/
          $var_nombre     =     $row['USU_NOMBRE'];
          $var_apellidop  =     $row['USU_APELLIDO_PATERNO'];
          /*$var_apellidom  =     $row['USU_APELLIDO_MATERNO'];
          $var_direccion  =     $row['USU_DIRECCION'];
          $var_colonia    =     $row['USU_COLONIA'];
          $var_lugarnac   =     $row['USU_LUGAR_NACIMIENTO'];
          $var_telefono   =     $row['USU_TELEFONO'];
          $var_celular    =     $row['USU_CELULAR'];
          $var_codigopost =     $row['USU_CODIGO_POSTAL'];
          $var_fechanac   =     $row['USU_FECHA_NAC'];*/
          $var_idbec       =     $row['ID_BECARIO'];

          $var_id         =     $row['ID_USUARIO'];

                $i++;

        ?>
<!--Envia los datos por el metodo POST para cada input -->
                                                 <form method="post" action="registrar_asistencia.php">


                                     <tbody >
                                            <tr>

                                                <td><input class ="col-md-5"type="number"  name = "idbec" value="<?php echo $var_idbec; ?>" readonly="readonly"/></td>
                                                <td><?php echo $var_nombre ?></td>
                                                <td><?php echo $var_apellidop; ?></td>
                                                <!--Obtiene la fecha actual por medio de php-->
                                                <td><input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" readonly="readonly" /></td>   <!--<?php echo$fecha_actual ?>-->

                                               <!-- <td contenteditable="true"> </td>-->
                                                <td> <input type="hidden" id="checkbox"  name="asistencia" value="0" /> <center>
                                                              <input type="checkbox" id="checkbox"  name="asistencia" value="1" /></center></td>



                                                <td>
                                                    <!--<a href="asignar_calificaciones.php" class="btn btn-simple btn-info btn-icon like"><i class="ti-heart"></i></a>
                                                    <a href="editar_calificaciones.php?editar=<?php echo $var_id; ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></a>
                                                    <a href="calificaciones.php?borrar=<?php echo $var_id; ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>-->
                                                    <!--boton con submit para agregar los datos por medio de POST-->
                                                  <button type="submit" class="btn btn-fill btn-danger btn-wd">Agregar</button>




                                                </td>
                                             <!--   no=".$fila['CAL_NIVEL_INGLES']."-->

                                            </tr>
  </form>

          <?php } ?>



   <script type="text/javascript">

    $("form").submit(function () {

    var this_master = $(this);

    this_master.find('input[type="checkbox"]').each( function () {
        var checkbox_this = $(this);


        if( checkbox_this.is(":checked") == true ) {
            checkbox_this.attr('value','1');
        } else {
            checkbox_this.prop('checked',true);
            //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA
            checkbox_this.attr('value','0');
        }
    })
})
   </script>








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
                                <a href="#">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   Blog
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Licenses
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

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
    <script src="assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

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

    <!--   Sharrre Library    -->
    <script src="ssets/js/jquery.sharrre.js"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>



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
                    searchPlaceholder: "Search records",
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
