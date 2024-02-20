<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/app.css">
    <script src="../resources/js/app.js"> </script>
    <title>TriniAnim</title>
</head> 
<body>
    <div class="form container-fluid">
      
        <ul class="tab-group">
          <li class="tab active "><a href="#Registrarse">Registrarse</a></li>
          <li class="tab"><a href="#IniciarSesion">Iniciar Sesion</a></li>
        </ul>
        
        <div class="col-md-6">
          <div id="Registrate" class="Cambio col-6">   
            <h1>Registrate</h1>
            
            <form action="/" method="post">
            
            <div class="top-row">
              <div class="field-wrap">
              
                <input type="text" required autocomplete="off" placeholder="Nombre" />
              </div>
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Usuario" />
              </div>
              <div class="field-wrap">
                <input type="text"required autocomplete="off" placeholder="Apellido1"/>
              </div>
              <div class="field-wrap">
                <input type="text"required autocomplete="off" placeholder="Apellido2"/>
              </div>
            </div>
  
            <div class="field-wrap">
              <input type="email"required autocomplete="off" placeholder="Email"/>
            </div>
            
            <div class="field-wrap">
              <input type="password"required autocomplete="off" placeholder="Contraseña"/>
            </div>
            
            <button type="submit" class="button button-block">Registrarse</button>
            
            </form>
  
          </div>
          
          <div id="IniciarSesion" class="Cambio col-6">   
            <h1>Inicia Sesion</h1>
            
            <form action="/" method="post">
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