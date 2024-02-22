<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- <link rel="stylesheet" href="../css/estadosAnimo.css">
    <script src="../js/estadosAnimo.js"> </script> -->

    <link rel="stylesheet" href="../resources/css/estadosAnimo.css">
    <script src="../resources/js/estadosAnimo.js"> </script>
    <title>Estados Animo Alumno</title>
</head> 
<body>
    <div class="form container-fluid" id="DivPrincipal">

    <p id="escudo"><img src="../resources/Images/Logo.jpg" alt="Logo">TriniAnim</p>
      <ul class="tab-group">
          <li class="tab active "><a href="#RegistroEstado">Registrar Estado Animo</a></li>
          <li class="tab active"><a href="#ActualizarEstado">Actualizar Estado Animo</a></li>
          <li class="tab active"><a href="#MostrarEstado">Mostrar Estados Animo</a></li>
      </ul> <br><br><br><br><br><br>

      <div class="col-md-6">
        <div id="RegistroEstado" class="Cambio col-6">   
          <h1>Estado</h1><br><br>
          <form action="{{ url('register') }}" method="post"> 
          <div class="top-row">
            <div class="field-wrap">
              <select required id="descripcion">
                <option value="" disabled selected>Selecciona un estado</option>
                <option value="Trabajando">Trabajando</option>
                <option value="Descansando">Descansando</option>
                <option value="De Relax">De Relax</option>
                <option value="Viendo una peli">Viendo Peli</option>
                <option value="Cocinando">Cocinando</option>
                <option value="Siesta">Siesta</option>
              </select>
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

        <div id="MostrarEstado" class="Cambio col-6">   
          <h1>Datos del Día</h1>
        <form action="{{ route('login') }}" method="get"> <br>
            <p id="fechaActual2"></p> <br><br><br>
            <label>Nombre: </label>  <br> <br> 
            <label>Tiempo del día: </label> <br> <br>
            <label>Estado: </label>
        </form>
        </div>
      </div>
    </div>
</body>
</html>