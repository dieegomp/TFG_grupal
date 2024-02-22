document.addEventListener("DOMContentLoaded", function() {
    const registroEstadoParte = document.querySelector('a[href="#RegistroEstado"]');
    const actualizarEstadoParte = document.querySelector('a[href="#ActualizarEstado"]');
    const mostrarEstadoParte = document.querySelector('a[href="#MostrarEstado"]');
    const registroEstadoForm = document.getElementById('RegistroEstado');
    const actualizarEstadoForm = document.getElementById('ActualizarEstado');
    const mostrarEstadoForm = document.getElementById('MostrarEstado');

    registroEstadoParte.addEventListener('click', function(e) {   
      e.preventDefault();
      registroEstadoForm.style.display = 'block';
      actualizarEstadoForm.style.display = 'none';
      mostrarEstadoForm.style.display = 'none';
      registroEstadoParte.parentElement.classList.add('active');
      actualizarEstadoParte.parentElement.classList.remove('active');
      mostrarEstadoParte.parentElement.classList.remove('active');
    });
  
    actualizarEstadoParte.addEventListener('click', function(e) {   
      e.preventDefault();
      actualizarEstadoForm.style.display = 'block';
      registroEstadoForm.style.display = 'none';
      mostrarEstadoForm.style.display = 'none';
      actualizarEstadoParte.parentElement.classList.add('active');
      registroEstadoParte.parentElement.classList.remove('active');
      mostrarEstadoParte.parentElement.classList.remove('active');
    });

    mostrarEstadoParte.addEventListener('click', function(e) {   
      e.preventDefault();
      mostrarEstadoForm.style.display = 'block';
      registroEstadoForm.style.display = 'none';
      actualizarEstadoForm.style.display = 'none';
      mostrarEstadoParte.parentElement.classList.add('active');
      registroEstadoParte.parentElement.classList.remove('active');
      actualizarEstadoParte.parentElement.classList.remove('active');
    });

    
    var formattedDate = new Date().toLocaleDateString('en-GB');
    document.querySelector('#fechaActual').textContent = "FechaActual: " + formattedDate;

    var formattedDate = new Date().toLocaleDateString('en-GB');
    document.querySelector('#fechaActual2').textContent = "FechaActual: " + formattedDate;
  });

let selectedEmoji = '';
function selectEmoji(emoji) {
    selectedEmoji = emoji;
    alert('Emoticono selecionado: '+selectedEmoji);
}

function validarRegistroEstado() {
  const descripción = document.getElementById('descripción').value.trim();

  if (descripción === '') {
    alert('Por favor, complete todos los campos.');
    return; //Que no mande el form si la validacion falla
  }
  if (!/^[a-zA-Z]+$/.test(descripción) || descripción.length < 10) {
    alert('La descripción debe contener solo letras y tener al menos 10 caracteres.');
    return;
  }
  alert('Estado de usuario registrado correctamente');
  document.querySelector('form').submit();
}

let selectedTDia = '';
function selectTDia(tiempo) {
    selectedTDia = tiempo;
    alert('Tiempo del día selecionado: '+selectedTDia);
}

function validarActualizarEstado() {
  const descripción = document.getElementById('descripción').value.trim();

  if (descripción === '') {
    alert('Por favor, complete todos los campos.');
    return; //Que no mande el form si la validacion falla
  }
  if (!/^[a-zA-Z]+$/.test(descripción) || descripción.length < 10) {
    alert('La descripción debe contener solo letras y tener al menos 10 caracteres.');
    return;
  }
  alert('Estado de usuario registrado correctamente');
  document.querySelector('form').submit();
}



