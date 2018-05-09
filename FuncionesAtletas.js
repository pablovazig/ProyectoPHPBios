/* FUNCIONES PARA ATHLETIC.WEB*/

function CheckForm() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Datos erróneos:\n";
    var error   = false;
    // capturar datos del formulario
    var nombre      = document.getElementById("AtletaNOM").value;
    var edad        = document.getElementById("AtletaEDAD").value;
    var origen      = document.getElementById("AtletaORG").value;
    var disciplina  = document.getElementById("AtletaDISC").value;
    // validar datos
    if (nombre=="") {
        mensaje = mensaje + "Ingrese nombre\n";
        error   = true;
    } // endif
    if (edad=="") {
        mensaje = mensaje + "Ingrese edad\n";
        error   = true;
    } // endif
    if (origen=="0") {
        mensaje = mensaje + "Seleccione origen\n";
        error   = true;
    } // endif
    if (isNaN(edad)) {  // is Not a Number
        mensaje = mensaje + "La edad debe ser un número\n";
        error   = true;
    } // endif            
    if (disciplina=="0") {
        mensaje = mensaje + "Seleccione una disciplina\n";
        error   = true;
    } // endif
    // control de error
    if (error) {
        // mostrar mensaje
        window.alert(mensaje);
    } else {
        // enviar el formulario
        document.getElementById("dataFRM").submit();
    } // endif
} // end function

function CheckDisc () {
// preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Datos erróneos:\n";
    var error   = false;
    // capturar datos del formulario
    var nomdisc      = document.getElementById("DiscNOM").value;    
    if (nomdisc=="") {
        mensaje = mensaje + "Ingrese una disciplina\n";
        error   = true;
    } // endif
    // control de error
    if (error) {
        // mostrar mensaje
        window.alert(mensaje);
    } else {
        // enviar el formulario
        document.getElementById("confirmadiscFRM").submit();
    } // endif
} // end function

function CheckID() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Datos erróneos:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("AtletaID").value;
    // validar datos
    if (id=="") {
        mensaje = mensaje + "Ingrese ID de Atleta\n";
        error   = true;
    } // endif
    if (isNaN(id)) {    // is Not a Number
        mensaje = mensaje + "ID debe ser numérico\n";
        error   = true;
    } // endif
    // control de error
    if (error) {
        // mostrar mensaje
        window.alert(mensaje);
    } else {
        // enviar el formulario
        document.getElementById("dataFRM").submit();
    } // endif
} // end function

function CheckDiscID() {
    // preparar mensaje y control de error
    var mensaje = "ATENCION!!!... Datos erróneos:\n";
    var error   = false;
    // capturar datos del formulario
    var id = document.getElementById("DiscID").value;
    // validar datos
    if (id=="") {
        mensaje = mensaje + "Ingrese ID de Disciplina\n";
        error   = true;
    } // endif
    if (isNaN(id)) {    // is Not a Number
        mensaje = mensaje + "ID debe ser numérico\n";
        error   = true;
    } // endif
    // control de error
    if (error) {
        // mostrar mensaje
        window.alert(mensaje);
    } else {
        // enviar el formulario
        document.getElementById("discFRM").submit();
    } // endif
} // end function

function ConfirmDEL() {
    var confirma = window.confirm("¿Realmente desea eliminar el registro?");
    if (confirma) {
        document.getElementById("dataFRM").submit();
    } else {
        window.location = "FormAtletaDEL.php";
    } // endif
} // end function

function CancelarModAtleta() {
    window.location= "FormAtletaMod.php";
} //end function

function CancelarDiscMod() {
    window.location= "FormDiscMod.php";
} //end function

function FinConsulta () {
    window.location= "FormConsulta.php";
} //end function

function BtnSalir () {
    window.close (); 
}

function BtnVolverAt() {
    window.location="atletas.php";
}

function BtnVolverDisc() {
    window.location="disciplinas.php";
}