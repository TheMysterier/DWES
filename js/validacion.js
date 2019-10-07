function validar(document){
    var nombre      = document.getElementById("nombre").value.trim();
    var apellido    = document.getElementById("apellido").value;
    var edad        = document.getElementById("edad").value;
    var movil       = document.getElementById("movil").value;
    var correo      = document.getElementById("correo").value;
    var pass        = document.getElementById("pass").value;
    var rPass       = document.getElementById("rPass").value;
    
    if (nombre == "" || apellido == "" || parseInt(edad) == null || movil == "" || correo == "" || pass == "" || rPass == "") {
        alert("Todos los campos con * deben estar informados.");
    } else {
        if (parseInt(edad)<18 || parseInt(edad)>100) {
            alert("Edad no permitida.");
        }

        if (edad.chatAt(0) != 6) {
            alert("Teléfono no permitido.");
        }

        object = correo;
        patron = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/";
        if (object.search(patron) != 0) {
            alert("Correo no permitido.");
        }

        if (pass != rPass) {
            alert("Contraseñas distintas.");
        }
    }
}