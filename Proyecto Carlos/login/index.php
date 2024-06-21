<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width-device-width, initial-scale-1.8">
    <link rel="stylesheet" href="indexx.css">
    <title>Ingreso</title>
</head>  
<body>
    <main>
    <div class="contenedor__todo">
          <div class="caja__trasera">
            <div class="caja__trasera-login">
                
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aun no tienes una cuenta?</h3>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn__Registrarse">Registrarse</button>
            </div>
          </div>
             
          <div class="contenedor__login-register">
               
            <form action="login_usuario_be.php" method="POST" class="formulario__login">
                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Correo Electronico" name="Correo">
                <input type="password" placeholder="Contraseña" name="Contrasena" id="password">
                <button>Entrar</button>
            </form>
        

            <form action="registro_usuario_be.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre completo" name="nombre_completo">
                <input type="text" placeholder="Numero de telefono" name="Telefono">
                <input type="text" placeholder="Correo Electronico"name="Correo">
                <input type="password" placeholder="Contraseña"name="Contrasena" id="password">
                <button>Registrarse</button>

            </form>
            
            
                
           
           
          </div> 
        </div>
    </main>
    <script src="index.js"></script>

</body> 
</html> 


