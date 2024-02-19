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
    <div class="form">
      
        <ul class="tab-group">
          <li class="tab active"><a href="#Registrarse">Registrarse</a></li>
          <li class="tab"><a href="#IniciarSesion">Iniciar Sesion</a></li>
        </ul>
        
        <div class="tab-content">
          <div id="Registrate">   
            <h1>Registrate</h1>
            
            <form action="/" method="post">
            
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Nombre
                </label>
                <input type="text" required autocomplete="off" />
              </div>
          
              <div class="field-wrap">
                <label>
                  Apellido1
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
              <div class="field-wrap">
                <label>
                  Apellido2
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>
  
            <div class="field-wrap">
              <label>
                Email 
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Contraseña
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <button type="submit" class="button button-block">Registrarse</button>
            
            </form>
  
          </div>
          
          <div id="IniciarSesion">   
            <h1>Inicia Sesion</h1>
            
            <form action="/" method="post">
            
              <div class="field-wrap">
              <label>
                Usuario
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Contraseña
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            <button class="button button-block">Iniciar Sesion</button> 
            </form>
          </div> 
        </div>
  </div>
</body>
</html>