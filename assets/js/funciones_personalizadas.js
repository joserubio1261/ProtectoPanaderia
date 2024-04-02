/***Funciones Personales*/

// Función para validar la contraseña al enviar el formulario
$(document).ready(function() {
  $("form").submit(function(event) {
    var password = $("#pass1").val();
    // Expresión regular para validar la contraseña
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (!regex.test(password)) {
      Swal.fire({
        icon:"error",
        title: "Lo siento, parece que hay un problema",
        text: "La contraseña debe contener al menos una mayúscula, una minúscula y un número, y tener al menos 8 caracteres.",
        confirmButtonColor: '#690000',
        customClass: {
          popup: 'serror',
          }
      })
      event.preventDefault();
    }
  });
});

// Muestra mensaje de error de contraseñas no coincidentes 
function registroExito() {
  Swal.fire({
    title: '!Te has registrado correctamente!',
    icon: 'success',
    confirmButtonText: 'Continuar',
    confirmButtonColor: '#690000',
    customClass: {
      popup: 'success'
    }
  });
}

function registroError() {
  Swal.fire({
    title: '¡Error al registrarse!',
    icon: 'error', 
    confirmButtonText: 'Continuar',
    confirmButtonColor: '#690000',
    customClass: {
      popup: 'serror'
    }
  }); 
}

function passwordsNoIguales() {
  Swal.fire({
     title: '!Las contraseñas no coinciden!',
     icon: 'error',
     confirmButtonText: 'Continuar',
     confirmButtonColor: '#690000',
     customClass: {
       popup: 'serror'
     }
  });
}



 