<?php 

include('Conexion/conexion.php');

$txtUser = (isset($_POST['txtUser']))?$_POST['txtUser']:"";
$txtContra = (isset($_POST['txtContra']))?$_POST['txtContra']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";

if(!empty($accion))
{
    $Seleccion = $conexion->prepare("call `Login`('$txtUser','$txtContra');");
    $pag = "/Administrador/menu.php";			
    $Seleccion->execute();
    $usuarioSeleccionado= $Seleccion->fetch(PDO::FETCH_LAZY);
    $txtNombre = $usuarioSeleccionado['nombre'];
    $txtApellido = $usuarioSeleccionado['apellido'];
    $txtIsEmpleado = $usuarioSeleccionado['isEmpleado'];
    
    if(empty($usuarioSeleccionado))
    {
        $var = "Usuario o Contraseña incorrecta...";
        echo "<script> alert('".$var."'); </script>";
    }
    else
    {
          
        if(!$txtIsEmpleado == 1)
        {
            $pag = "/Administrador/menu.php";
        }
        else
        {
            $pag = "Cliente.php";
        }
        
        $var = "Bienvenido al Sistema $txtNombre $txtApellido...";
        echo "<script> alert('".$var."'); </script>";
    }  
}

          


                    
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Inicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="navId">
          <li class="nav-item">
              <a href="#tab1Id" class="nav-link active">Inicio</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="#tab2Id">Action</a>
                  <a class="dropdown-item" href="#tab3Id">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#tab4Id">Action</a>
              </div>
          </li>
          <li class="nav-item">
              <a href="#tab5Id" class="nav-link">Another link</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Login</a>
          </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
          <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
      </div>
      
      <script>
          $('#navId a').click(e => {
              e.preventDefault();
              $(this).tab('show');
          });
      </script>
    <div class="container">

        <form action='<?php echo $pag; ?>' method= 'post'>
        <div class = "form-group">
        <label for="txtUser">Usuario</label>
        <input type="text" class="form-control" name="txtUser" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
        <label for="txtContra">Contraseña</label>
        <input type="password" class="form-control" name="txtContra" placeholder="Password">
        </div>
       
        <button type="submit" name="accion" value="entrar" class="btn btn-primary">Sign In</button>
        </form>
        
        
         


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>