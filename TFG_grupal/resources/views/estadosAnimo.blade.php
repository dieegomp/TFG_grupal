<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estadosAnimo.css">
    <script src="../js/estadosAnimo.js"> </script>
    <title>Estados Animo Alumno</title>
</head> 
<body>
    <div class="form container-fluid" id="DivPrincipal">

    <p id="escudo"><img src="../Images/Logo.jpg" alt="Logo">TriniAnim</p>
      <ul class="tab-group">
          <li class="tab active "><a href="#RegistroEstado">Registrar Estado Animo</a></li>
          <li class="tab active"><a href="#ActualizarEstado">Actualizar Estado Animo</a></li>
      </ul> <br><br><br><br><br><br>

      <div class="col-md-6">
        <div id="RegistroEstado" class="Cambio col-6">   
          <h1>Estado</h1><br><br>
          <form action="{{ route('register') }}" method="post"> 
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" required autocomplete="off" placeholder="Descripción" id="descripción" /> 
            </div>
            <button class="emoji-button" onclick="selectEmoji('🙂')">🙂</button> &nbsp; &nbsp; &nbsp; &nbsp;
            <button class="emoji-button" onclick="selectEmoji('🙁')">🙁</button> &nbsp; &nbsp; &nbsp; &nbsp;
            <button class="emoji-button" onclick="selectEmoji('☹️')">☹️</button> &nbsp; &nbsp; &nbsp; &nbsp;
            <button class="emoji-button" onclick="selectEmoji('😮')">😮</button>
                     <br><br><br><br>
            <button type="button" class="button button-block" onclick="validarRegistroEstado()">Guardar Estado Animo</button>
          </div>
          </form>
        </div>
                            <br> <br>   
        <div id="ActualizarEstado" class="Cambio col-6">   
          <h1>Actualizar Estado</h1>
          <form action="{{ route('login') }}" method="post">
          <p id="fechaActual"></p>
          <button class="TDia-button" onclick="selectTDia('Mañana')">Mañana</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="TDia-button" onclick="selectTDia('Tarde')">Tarde</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="TDia-button" onclick="selectTDia('Noche')">Noche</button>
          <button class="button button-block" onclick="validarActualizarEstado()">Actializar Estado Animo</button>
        </form>
        </div>
      </div>
    </div>
    <!--<div class="form container-fluid" id="DivPrincipal">
    

        
    <div class="col-md-6">
      <div id="RegistroEstado" class="Cambio col-6">   
          <h1>Estado</h1><br><br>
          <form action="{{ route('register') }}" method="post"> 
         <div class="top-row">
              <div class="field-wrap">
                <input type="text" required autocomplete="off" placeholder="Descripción" id="descripción" /> 
              </div>
          <button class="emoji-button" onclick="selectEmoji('🙂')">🙂</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="emoji-button" onclick="selectEmoji('🙁')">🙁</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="emoji-button" onclick="selectEmoji('☹️')">☹️</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="emoji-button" onclick="selectEmoji('😮')">😮</button>
             <br><br><br><br>
          <button type="button" class="button button-block" onclick="validarRegistroEstado()">Guardar Estado Animo</button>
          </form>
      </div>
                    <br> <br>   
      <div id="ActualizarEstado" class="Cambio col-6">   
          <h1>Actualizar Estado</h1>
          <form action="{{ route('login') }}" method="post">
          <p id="fechaActual"></p>
          <button class="TDia-button" onclick="selectTDia('Mañana')">Mañana</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="TDia-button" onclick="selectTDia('Tarde')">Tarde</button> &nbsp; &nbsp; &nbsp; &nbsp;
          <button class="TDia-button" onclick="selectTDia('Noche')">Noche</button>
          <button class="button button-block" onclick="validarActualizarEstado()">Actializar Estado Animo</button>
          </form>
      </div>
    </div>
  </div>
</div> -->
</body>
</html>