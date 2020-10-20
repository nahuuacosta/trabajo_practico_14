<?php
    include("conexion.php");
?>
<html>
    <head>
        <title>Login Basico</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    </head>
    <body>
       <a href="">Contactos</a>
         <div class="row">
            <form class="col s12" action="login.php" method="post">
              <div class="row">
                <div class="input-field col s6">
                  <input type="text" class="validate" name="username" required>
                  <label>Nombre de usuario</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <input type="text" class="validate" name="password" required>
                  <label>Contraseña</label>
                </div>
              </div>
               <button class="btn waves-effect waves-light" type="submit">Iniciar Sesion 
                </button>
            </form>
          </div>
    </body>
</html>