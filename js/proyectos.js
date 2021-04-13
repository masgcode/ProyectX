function cargarInfoProyectos() {

    document.title = "Proyectos";
    desplegarModulo("Proyectos");
}

function verSeccion(elemento) {

    // Quito el anterior activado.
    if (document.getElementsByClassName('card-single__active').length > 0) {
        document.getElementsByClassName('card-single__active')[0].className = "card-single";
    }

    // Nuevo activado.
    elemento.className = "card-single__active";

    // Desplegar los datos.
    var id = elemento.getElementsByTagName('input')[0].value;
    var modulo = elemento.getElementsByTagName('input')[1].value;
    desplegarDatosSeccion(id, modulo);
}

function desplegarModal() {

}