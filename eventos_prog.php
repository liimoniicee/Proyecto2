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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Comp
    atible" content="IE=edge,chrome=1" />

    <title>Eventos Porgramados</title>

    <!-- Canonical SEO -->


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
                <a href="#" class="simple-text logo-mini">
                    SH
                </a>

                <a href="#" class="simple-text logo-normal">
                 SCHOOLAR
                </a>
            </div>


            <div class="sidebar-wrapper">

                <div class="user">
                    <div class="info">
                        <div class="photo">
                            <img src="assets/img/faces/face-2.jpg" />
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
                                        <span class="sidebar-normal">Configuración de cuenta</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="nav">
                    <li>
                        <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                            <i class="ti-user"></i>
                            <p>Perfil de Usuario
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="dashboardOverview">
                            <ul class="nav">
                                <li >
                                    <a href="coordinador.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Editar Perfil</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--<li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="ti-id-badge"></i>
                            <p>Control Empleados
                               <b class="caret"></b>
                            </p>
                        </a>
                    </li >-->


                        <li class="active">
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Agenda
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse in" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="agenda_progevent.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Programar un Evento</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="eventos_prog.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Eventos Programados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Reportes
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse" id="formsExamples">
                            <ul class="nav">

                               <!-- <li>
                                    <a href="reporte_bitacora.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Bitacora de Limpieza</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia Ingles</span>
                                    </a>
                                </li>-->
                                 <li>
                                    <a href="aplicaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Aspirantes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                   <!-- <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="ti-comments-smiley"></i>
                            <p>
                                Equipos
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="../maps/google.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Ver Equipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../maps/vector.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Nuevo Equipo</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>-->

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
                           Coordinador
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">



                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p><?php echo "Bienvenido: ".$_SESSION['nombre'];?></p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                                  <i class="ti-help-alt"></i>

                                  <p class="hidden-md hidden-lg">
                                      Notifications
                                      <b class="caret"></b>
                                  </p>
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a href="assets/manual/usuario.pdf">Manual de usuario</a></li>

                              </ul>
                            </li>
                            <li>
                                <a href="destroy.php" class="btn-rotate">
                                    <i class="ti-share-alt"></i>
                                    <p class="hidden-md hidden-lg">
                                        Settings
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
                     <div class="card">
                         <div class="content">
                            <div class=" card content">


                                <div class="card-header">

                                    <h4 class="card-title">Eventos Programados</h4>
                                    <p class="category"></p>
                                </div>


                                <div class="card-content table-responsive table-full-width">
                                    <table class="table table-striped" id="a-tables">
                                        <thead>



                                             <?php


                   include 'conexion.php';

                   $sql = " SELECT
                   ID_ACTIVIDAD,
                   ACT_TITULO_ACTVI,
                   ACT_TIPO_ACTIVIDAD ,
                   ACT_FECHA_INICIO ,
                   ACT_FECHA_TERMINO ,
                   ACT_LUGAR ,
                   ACT_DESCRIPCION
                   FROM
                   actividades ";


 ?>
                                            <tr>
                                            <th data-field="id"        class="text-center"    >Id                </th>
                                            <th data-field="titulo"    class="text-center"    >Titulo            </th>
                                            <th data-field="tipo"      class="text-center"    >Tipo de Actividad </th>
                                            <th data-field="fechai"    class="text-center"    >Fecha de Inicio   </th>
                                            <th data-field="fechat"    class="text-center"    >Fecha de Termino  </th>
                                            <th data-field="lugar"     class="text-center"    >Lugar             </th>
                                            <th data-field="descrip"   class="text-center"    >Descripción       </th>
                                            <th class="text-right"     class="text-center"    >Actions           </th>




                                            </tr>
                                        </thead>



                                        <tbody>


                                        <?php $resultado = $conn->query($sql); ?>
                                        <?php  if ($resultado->num_rows > 0) { ?>
                                        <?php  while ($row= $resultado->fetch_assoc()) { ?>
                                            <tr>
                                                <td  class="text-center" > <?php echo $row['ID_ACTIVIDAD'];         ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_TITULO_ACTVI'];   ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_TIPO_ACTIVIDAD']; ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_FECHA_INICIO'];   ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_FECHA_TERMINO'];  ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_LUGAR'];          ?></td>
                                                <td  class="text-center" > <?php echo $row['ACT_DESCRIPCION'];    ?></td>

                                             <?php $id_b=$row['ID_ACTIVIDAD'];  ?>

                                                <td class="td-actions text-right">

                                                          <button onclick="alerta(<?php echo $id_b ?>), enviarmod(<?php echo $id_b ?>);" title="Editar actividad" class="btn btn-simple btn-warning btn-icon edit"><i class="ti-pencil-alt"></i></button>
                                                         <!-- <button onclick="borrar(<?php echo $id_b ?>)" class="btn btn-simple btn-danger btn-icon remove"><i class="ti-close"></i></a>-->

                                                </td>
                                            </tr>


                                             <?php  }

                                            }   else {

                                                     }
                                           ?>
                                        </tbody>
                                    </table>



                             </div><!-- cierra el div content final -->

                        </div> <!-- cierra el div card -->

                     </div><!-- cierra el div col-md-12 -->

                </div><!-- cierra el div row-->

            </div> <!-- cierra el div container-fluid-->

         </div><!-- cierra el div content-->

    </div><!-- cierra el div del panel responsive-->


   <script>
          function borrar(id){
          swal({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             type: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             showLoaderOnConfirm: true,
             preConfirm: function() {
               return new Promise(function(resolve) {

                 $.ajax({
                  url: 'borrar_act.php',
                  type: 'POST',
                  data: 'delete='+id,
                  dataType: 'json'
               })
               .done(function(response){
                  swal('Deleted!', response.message, response.status);
                location.reload();
               })
               .fail(function(){
                  swal('Oops...', 'Something went wrong with ajax !', 'error');
               });
               });
             },
             allowOutsideClick: false
          });
          }
          </script>


            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Interface developers
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
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Interface</a>
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
    <script src="assets/js/jquery.sharrre.js"></script>

    <!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <!-- Data table plugin-->
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#a-tables').DataTable();</script>

<script>
function enviarmod(id){
  $.ajax({
      // la URL para la petición
      url : 'mod_eventprog.php',

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
        $("#swal-input1").val(data.data.nombre_act);
        $("#swal-input2").val(data.data.act_tipo);
        $("#swal-input3").val(data.data.act_fecha_inicio);
        $("#swal-input4").val(data.data.act_fecha_termino);
        $("#swal-input5").val(data.data.act_lugar);
        $("#swal-input6").val(data.data.act_descrip);
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




  <script type="text/javascript">

  function alerta(id){


  swal({
 title: 'Editar actividad',
 html:

 '<form action="editar_event.php" method="post" name="data">'+
 //'<label for="exampleInputEmail1">id</label>' +
 '<input name="swal-input0" type="hidden" id="swal-input0" class="form-control border-input">' +

 '<label for="exampleInputEmail1">Titulo</label>' +
 '<input name="swal-input1" id="swal-input1" class="form-control border-input" onkeypress="return validar2(event)">' +

 '<label for="exampleInputEmail1">Tipo Actividad</label>' +
 '<input name="swal-input2" id="swal-input2" class="form-control border-input" onkeypress="return validar2(event)">' +

 '<label for="exampleInputEmail1">Fecha de Inicio</label>' +
 '<input type="date" name="swal-input3" id="swal-input3" class="form-control border-input" min="<?php echo date("Y-m-d");?>>' +

 '<label for="exampleInputEmail1">Fecha de Termino</label>' +
 '<input type="date" name="swal-input4" id="swal-input4" class="form-control border-input" min="<?php echo date("Y-m-d");?>>' +

 '<label for="exampleInputEmail1">Lugar</label>' +
 '<input name="swal-input5" id="swal-input5" class="form-control border-input" onkeypress="return validar2(event)">'  +

 '<label for="exampleInputEmail1">Descripcion</label>' +
 '<input name="swal-input6" id="swal-input6" class="form-control border-input" onkeypress="return validar2(event)"> </br>' +

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
<script>
function validar3(e) {
tecla = (document.all) ? e.keyCode : e.which;
if (tecla==8) return true; //Tecla de retroceso (para poder borrar)
// dejar la línea de patron que se necesite y borrar el resto
//patron =/[A-Za-z\s]/; // Solo acepta letras  \s = es para el espacio
patron = /\d/; // Solo acepta números
//patron = /\w/; // Acepta números y letras
//patron = /[\w\s]/;// Acepta números y letras y espacio
//patron = /\D/; // No acepta números
//

te = String.fromCharCode(tecla);
return patron.test(te);
}
</script>

</html>
