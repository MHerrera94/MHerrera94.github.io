//Haz tú validación en javascript acá
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formcontato")
    .addEventListener("submit", verificarDatos);
});
function verificarDatos(evento) {
  evento.preventDefault();
  var nombre = document.getElementById("nombre").value;
  if (nombre.length == 0) {
    alert("Debe llenar el campo con su nombre");
    return 0;
  }
  var email = document.getElementById("email").value;
  const regex =
    /^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i;
  if (email.length == 0) {
    alert("Debe llenar el campo con su correo de contacto");
    return;
  } else if (!regex.test(email)) {
    alert("La direccion de email ingresada no es correcta");
    return;
  }
  var asunto = document.getElementById("asunto").value;
  if (asunto.length == 0) {
    alert("Debe colocar el motivo por el cual desea contactarme");
    return;
  }
  var mensaje = document.getElementById("mensagem").value;
  if (mensaje.length == 0) {
    alert("Ingrese un mensaje corto del motivo por el cual desea contactarme");
    return;
  }
  this.submit();
}
/*function validarEmail(valor) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)) {
    alert("La dirección de email " + valor + " es correcta.");
  } else {
    alert("La dirección de email es incorrecta.");
  }
}*/
