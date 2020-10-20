<?php 
    include("conexion.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $validacion;

    $query = mysqli_query($conexion,"SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");
    
    $resultado = mysqli_num_rows($query);
    
    if($resultado == 1){
        $validacion =  $username;
    }else{
        $validacion = "Nombre de usuario y/o contraseña incorrectos";
        header("Location: error.php");
    }
    
?>
<html>
    <head>
        <title>Login Basico</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>
    <body>
         <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Bienvenido <?php echo $validacion?></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Opcion 1</a></li>
                <li><a href="#">Opcion 2</a></li>
                <li><a href="index.php">Cerrar Sesion</a></li>
              </ul>
            </div>
          </nav>
        <h6>Seccion principal de la pagina</h6>
    </body>
</html>

