<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <script src="../js/app.js"> </script>
    <title>TriniAnim</title>
</head> 
<body>
    <div class="form container-fluid" id="DivPrincipal">
    
    <p id="escudo"><img src="../Images/Logo.jpg" alt="Logo">TriniAnim</p>
        <ul class="tab-group">
          <li class="tab active "><a href="#Registrarse">Registrarse</a></li>
          <li class="tab active"><a href="#IniciarSesion">Iniciar Sesion</a></li>
        </ul> <br><br><br><br>
        
        <div class="col-md-6">
          <div id="Registrate" class="Cambio col-6">   
            <h1>Registrate</h1>
            <form action="{{ route('register') }}" method="post"> <!--  <form action="{{ route('register') }}" method="post">  -->
            <div class="top-row">
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Nombre" id="nombre" /> 
              </div>
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Usuario" id="usuario"/>
              </div>
              <div class="field-wrap">
                <input type="text"required autocomplete="off" placeholder="Apellido1" id="apellido1"/>
              </div>
              <div class="field-wrap">
                <input type="text"required autocomplete="off" placeholder="Apellido2" id="apellido2"/>
              </div>
            </div>
            <div class="field-wrap">
              <input type="email"required autocomplete="off" placeholder="Email" id="email"/>
            </div>
            <div class="field-wrap">
              <input type="password"required autocomplete="off" placeholder="Contraseña" id="password"/>
            </div>
            <button type="button" class="button button-block" onclick="validarFormulario()">Registrarse</button>
            </form>
          </div>
                    <br> <br>   
          <div id="IniciarSesion" class="Cambio col-6">   
          <h1>Inicia Sesion</h1>
            <form action="{{ route('login') }}" method="post">
              <div class="field-wrap">
              <input type="text"required autocomplete="off" placeholder="Usuario"/>
              </div>
              <div class="field-wrap">
              <input type="password"required autocomplete="off" placeholder="Contraseña"/>
              </div>
              <button class="button button-block">Iniciar Sesion</button> 
            </form>
          </div>

        </div>
  </div>
</body>
</html>