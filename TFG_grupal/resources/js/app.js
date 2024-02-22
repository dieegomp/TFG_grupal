document.addEventListener("DOMContentLoaded", function() {
  const registroParte = document.querySelector('a[href="#Registrarse"]');
  const loginParte = document.querySelector('a[href="#IniciarSesion"]');
  const registroForm = document.getElementById('Registrate');
  const loginForm = document.getElementById('IniciarSesion');

  registroParte.addEventListener('click', function(e) {   
    e.preventDefault();
    registroForm.style.display = 'block';
    loginForm.style.display = 'none';
    registroParte.parentElement.classList.add('active');
    loginParte.parentElement.classList.remove('active');
  });

  loginParte.addEventListener('click', function(e) {  
    e.preventDefault();
    loginForm.style.display = 'block';
    registroForm.style.display = 'none';
    loginParte.parentElement.classList.add('active');
    registroParte.parentElement.classList.remove('active');
  });
});

function validarFormulario() {
  const nombre = document.getElementById('nombre').value.trim();
  const usuario = document.getElementById('usuario').value.trim();
  const apellido1 = document.getElementById('apellido1').value.trim();
  const apellido2 = document.getElementById('apellido2').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value.trim();

  if (nombre === '' || usuario === '' || apellido1 === '' || apellido2 === '' || email === '' || password === '') {
    alert('Por favor, complete todos los campos.');
    return; //Que no mande el form si la validacion falla
  }
  if (!/^[a-zA-Z]+$/.test(nombre) || nombre.length < 2) {
    alert('El nombre debe contener solo letras y tener al menos 2 caracteres.');
    return;
  }
  if (!esEmail(email)) {
    alert('Por favor, introduzca un correo electrónico válido.');
    return;
  }
  if (!esPasswordValida(password)) {
    alert('La contraseña debe contener al menos 8 caracteres, una letra minúscula, una letra mayúscula, un carácter especial.');
    return;
  }
  alert('Usuario registrado correctamente y Formulario Enviado');
  document.querySelector('form').submit();
}

function esEmail(valor) {
  const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return regexEmail.test(valor);
}

function esPasswordValida(valor) {
  const regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.{8,})/;
  return regexPassword.test(valor);
}
