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
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Comp
    atible" content="IE=edge,chrome=1" />

    <title>Aspirantes</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/paper-dashboard-pro"/>


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

                   <!-- <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="ti-id-badge"></i>
                            <p>Control Empleados
                               <b class="caret"></b>
                            </p>
                        </a>
                    </li >-->


                        <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="ti-agenda"></i>
                            <p>
                                Agenda
                               <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="agenda_progevent.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Programar un Evento</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="eventos_prog.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Eventos Programados</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="active">
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="ti-clipboard"></i>
                            <p>
                                Reportes
                               <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse-in" id="formsExamples">
                            <ul class="nav">

                                <!--<li>
                                    <a href="reporte_bitacora.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Bitacora de Limpieza</span>
                                    </a>
                                </li>-->

                                <!--<li>
                                    <a href="forms/extended.html">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Asistencia Ingles</span>
                                    </a>
                                </li>-->
                                 <li class="active">
                                    <a href="aplicaciones.php">
                                        <span class="sidebar-mini"></span>
                                        <span class="sidebar-normal">Aspirantes</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                  <!--  <li>
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
                        
                            <li>
                                <a href="destroy.php" class="btn-rotate">
                                    <i class="ti-settings"></i>
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
  <div class="toolbar">
                                    <button class="btn btn-default" type="button" name="refresh" title="Refresh"><i class="glyphicon fa fa-refresh"></i></button>
                                    </div>



                                    <table id="bootstrap-table" class="table">
                                        <thead>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id" class="text-center">ID</th>
                                            <th data-field="name" data-sortable="true">Nombre</th>
                                            <th data-field="salary" data-sortable="true">Apellido Paterno</th>
                                            <th data-field="country" data-sortable="true">Apellido Materno</th>
                                            <th data-field="actions" class="td-actions text-right"  >Acciones</th>
                                        </thead>


                                        <tbody>


                                             <?php

                   include 'conexion.php';

                  $sql = " SELECT
                  ID_USUARIO,
                  USU_NOMBRE,
                  USU_APELLIDO_MATERNO,
                  USU_APELLIDO_PATERNO
                  FROM
                  usuarios WHERE USU_ROLL=1";

 ?>



                                            <tr>
                                        <?php $resultado = $conn->query($sql); ?>
                                        <?php  if ($resultado->num_rows > 0) { ?>
                                        <?php  while ($row= $resultado->fetch_assoc()) { $id_b=$row['ID_USUARIO']; ?>
                                                <td></td>
                                                <td><?php echo $row['ID_USUARIO'];?></td>
                                                <td> <?php echo $row['USU_NOMBRE'];?></td>
                                                <td><?php echo $row['USU_APELLIDO_PATERNO']; ?></td>
                                                <td> <?php echo $row['USU_APELLIDO_MATERNO']; ?></td>
                                                
                                                <td>

                                                 <button  onclick="alerta(<?php echo $id_b ?>),enviarmod(<?php echo $id_b ?>);" class="btn btn-simple btn-info btn-icon table-action view" rel="tooltip" title="Ver Aplicacion" ><i class="ti-image"></i></button>
                                                
                                                 <button  onclick="alerta(<?php echo $id_b ?>),enviarmod(<?php echo $id_b ?>);" class="btn btn-simple btn-info btn-icon table-action view" rel="tooltip" title="Ver Aplicacion" ><i class="ti-image"></i></button>


                                                </td>
                                            </tr>
                                              <?php  }

                                            }   else {

                                                     }
                                           ?>

                                        </tbody>
                                    </table>



<script>

function enviarmod(id){

  $.ajax({
      // la URL para la petición
      url : 'mod_report.php',

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
        $("#swal-input1").val(data.data.name);
        $("#swal-input2").val(data.data.apepat);
        $("#swal-input3").val(data.data.apemat);
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
 title: 'Solicitud Aspirante',
 html:

 '<form action="repo_pdfasp.php" method="post" name="data" >'+

 '<p class="category"> Usted va a generar un reporte con la siguiente informacion</p>'+

 '<input type="hidden" name="swal-input0" id="swal-input0" class="form-control border-input">' +

 '<label for="exampleInputEmail1">Nombre</label>' +
 '<input name="nombre" id="swal-input1" class="form-control border-input" disabled=”disabled”>' +

 '<label for="exampleInputEmail1">Apellido Paterno</label>' +
 '<input name="apellidop" id="swal-input2" class="form-control border-input" disabled=”disabled”>' +

 '<label for="exampleInputEmail1">Apellido Materno</label>' +
 '<input name="apellidom" id="swal-input3" class="form-control border-input" disabled=”disabled”></br>' +

 '<Button type="submit" class= "btn btn-info btn-fill btn-wd">Generar Reporte</Button>'+
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






                             </div><!-- cierra el div content final -->

                        </div> <!-- cierra el div card -->

                     </div><!-- cierra el div col-md-12 -->

                </div><!-- cierra el div row-->

            </div> <!-- cierra el div container-fluid-->

         </div><!-- cierra el div content-->

    </div><!-- cierra el div del panel responsive-->





            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Interface
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                   Media
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Social
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, echo con <i class="fa fa-heart heart"></i> por <a href="">Interface</a>
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




<script type="text/javascript">

    var $table = $('#bootstrap-table');

          function operateFormatter(value, row, index) {
              return [
          '<div class="table-icons">',
                    '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
              '<i class="ti-image"></i>',
            '</a>',
                    '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                        '<i class="ti-pencil-alt"></i>',
                    '</a>',
                    '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                        '<i class="ti-close"></i>',
                    '</a>',
          '</div>',
              ].join('');
          }

          $().ready(function(){
              window.operateEvents = {
                  'click .view': function (e, value, row, index) {
                      info = JSON.stringify(row);

                      swal('You click view icon, row: ', info);
                      console.log(info);
                  },
                  'click .edit': function (e, value, row, index) {
                      info = JSON.stringify(row);

                      swal('You click edit icon, row: ', info);
                      console.log(info);
                  },
                  'click .remove': function (e, value, row, index) {
                      console.log(row);
                      $table.bootstrapTable('remove', {
                          field: 'id',
                          values: [row.id]
                      });
                  }
              };

              $table.bootstrapTable({
                  toolbar: ".toolbar",
                  clickToSelect: true,
                  showRefresh: true,
                  search: true,
                  showToggle: true,
                  showColumns: true,
                  pagination: true,
                  searchAlign: 'left',
                  pageSize: 8,
                  clickToSelect: false,
                  pageList: [8,10,25,50,100],

                  formatShowingRows: function(pageFrom, pageTo, totalRows){
                      //do nothing here, we don't want to show the text "showing x of y from..."
                  },
                  formatRecordsPerPage: function(pageNumber){
                      return pageNumber + " rows visible";
                  },
                  icons: {
                      refresh: 'fa fa-refresh',
                      toggle: 'fa fa-th-list',
                      columns: 'fa fa-columns',
                      detailOpen: 'fa fa-plus-circle',
                      detailClose: 'ti-close'
                  }
              });

              //activate the tooltips after the data table is initialized
              $('[rel="tooltip"]').tooltip();

              $(window).resize(function () {
                  $table.bootstrapTable('resetView');
              });
      });

  </script>

</html>
