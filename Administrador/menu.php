<?php 
include('template/header.php');

 

 
?>

<div class="container">
    <div class="page-header">
        <h1 class="all-tittles">Sistema de Ventas <small>Inicio</small></h1>        
    </div>
</div>
<section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">Clientes</div>
                <div class="tile-num full-reset"><?php echo $totalClientes; ?></div>
            </article>
            <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-desktop-mac"></i></div>
                <div class="tile-name all-tittles">Productos</div>
                <div class="tile-num full-reset"><?php echo $totalProductos; ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-money"></i></div>
                <div class="tile-name all-tittles">Ventas</div>
                <div class="tile-num full-reset"><?php echo $totalVentas; ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
                <div class="tile-name all-tittles">categorías</div>
                <div class="tile-num full-reset"><?php echo $totalCategorias; ?></div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
                <div class="tile-name all-tittles">Empleados</div>
                <div class="tile-num full-reset"><?php echo $totalEmpleados; ?></div>
            </article>
      
           
        </section>

<?php include('template/footer.php'); ?>