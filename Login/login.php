<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
  
<body>
    <div id="mensaje">

        <h3>Bienvenidos a nuestra Tienda Online

        </h3>
    </div>
    <header>
        <div id="menu">
        <nav>
            <ul>
            <li><a id="hh1" href="http://localhost/liz/Principal/">Home</a></li>
          <li><a class="hh" href="http://localhost/liz/Productos/">Productos</a></li>
          <li><a class="hh" href="http://localhost/liz/Login/login.php">Iniciar Sesion</a></li>
          <li><a class="hh" href="http://localhost:3000">Registrarse</a></li>
            </ul>  
            </nav>
              
          </div>
    
          <img id="perfume" src="logo3.png" alt="">
    
    
    
    
        </header>


    
    <form action="validar.php" method="POST" id="form">

        <img id="logoregistro" src="logo3.png" alt="">

        <div class="form">
            <h1>Login</h1><br>
            <div class="grupo">
            <label for="nombre">Usuario</label>
                <input type="text" id="nombre" name="usuario" required>
            </div>
            <div class="grupo">
            <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contraseña" required>
            </div>

            <button input type="submit" value= "ingresar" id="Entrar">Entrar</button>
        </div>
    </form>
    <footer id="piedepagina">
        <h3>Derechos reservados Perfumeria Puertas del sur</h3>
    </footer>
</body>
</html>