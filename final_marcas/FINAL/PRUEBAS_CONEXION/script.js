document.addEventListener('DOMContentLoaded', function() {
    var registerForm = document.getElementById('registerForm');
    registerForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Evitar el envío del formulario
  
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
  
      // Enviar los datos al backend para el registro de la cuenta
      fetch('/register', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username: username, password: password })
      })
      .then(function(response) {
        if (response.ok) {
          document.getElementById('message').textContent = 'Registro exitoso';
          document.getElementById('username').value = '';
          document.getElementById('password').value = '';
        } else {
          document.getElementById('message').textContent = 'Error en el registro';
        }
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
    });
  });
  