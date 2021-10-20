<?php 
include('../Conexion/conexion.php');



//Contar las filas de la tabla de productos
$Seleccion = $conexion->prepare("select coalesce(count(*),0)'Total' from Productos;");
$Seleccion->execute();
$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
$totalProductos = $productoSeleccionado['Total'];



//Contar las filas de la tabla de Clientes
$Seleccion = $conexion->prepare("select coalesce(count(*),0) 'Total' from Clientes;");
$Seleccion->execute();
$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
$totalClientes = $productoSeleccionado['Total'];

  //Contar las filas de la tabla de Ventas
$Seleccion = $conexion->prepare("select count(*) 'Total' from Ventas;");
$Seleccion->execute();
$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
$totalVentas = $productoSeleccionado['Total'];

//Contar las filas de la tabla de Categorias
$Seleccion = $conexion->prepare("select count(*) 'Total' from Categorias;");
$Seleccion->execute();
$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
$totalCategorias = $productoSeleccionado['Total'];

//Contar las filas de la tabla de Empleados
$Seleccion = $conexion->prepare("select count(*) 'Total' from Empleados;");
$Seleccion->execute();
$productoSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
$totalEmpleados = $productoSeleccionado['Total'];

$txtUser = (isset($_POST['txtUser']))?$_POST['txtUser']:"";
$txtContra = (isset($_POST['txtContra']))?$_POST['txtContra']:"";


    $Query = $conexion->prepare("call `Login`('$txtUser','$txtContra');");					
    $Query->execute();
    $usuarioSeleccionado= $Query->fetch(PDO::FETCH_LAZY);
    $txtId = $usuarioSeleccionado['id'];
    $txtNombre = $usuarioSeleccionado['nombre'];
    $txtApellido = $usuarioSeleccionado['apellido'];
    $cargo = $usuarioSeleccionado['cargo'];
    $txtNombreUsuario = $usuarioSeleccionado['user'];
    $txtpass = $usuarioSeleccionado['contra'];
    $txtEmail = $usuarioSeleccionado['correo'];
    $txtIsEmpleado = $usuarioSeleccionado['isEmpleado'];

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src = "https://code.iconify.design/2/2.0.3/iconify.min.js"> </script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Techno Factory
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/LT.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema de Ventas</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
           
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Clientes <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li><a href="#"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Cliente</a></li>
                            <li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Cliente</a></li>
                            <li><a href="#"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Cliente</a></li>
                        </ul>
                    </li>
               
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Empleados <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="#"><i class="zmdi zmdi-save zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Empleado</a></li>
                            <li><a href="#"><i class="zmdi zmdi-edit zmdi-hc-fw"></i>&nbsp;&nbsp; Modificar Empleado</a></li>
                            <li><a href="#"><i class="zmdi zmdi-delete zmdi-hc-fw"></i>&nbsp;&nbsp; Eliminar Empleado</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-money zmdi-hc-fw"></i>&nbsp;&nbsp; Ventas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Realizar Venta</a>
                            </li>
                            
                           
                            <li>
                                <a href="#"><i class="zmdi zmdi-view-list zmdi-hc-fw"></i>&nbsp;&nbsp; Lista De Productos<span class="label label-danger pull-right label-mhover"><?php  echo $totalProductos; ?></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-folder-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias y más <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                          <!--  <li><a href="admin.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo administrador</a></li>-->
                            <li ><a href="#"><i class="zmdi zmdi-view-module zmdi-hc-fw"></i>&nbsp;&nbsp; Modelos</a></li>
                            <li><a href="#"><i class="zmdi zmdi-adb zmdi-hc-fw"></i>&nbsp;&nbsp; Marcas</a></li>
                            <li><a href="#"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorias</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="zmdi zmdi-laptop-mac zmdi-hc-fw"></i>&nbsp;&nbsp; Productos</a></li>
                 
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php echo "$txtNombre $txtApellido"; ?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar Cliente">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <!--
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Ventas <small>Inicio</small></h1>
            </div>
        </div> -->
        