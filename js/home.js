const nav_inicio = document.getElementById('nav-inicio');
const nav_proyectos = document.getElementById('nav-proyectos');

nav_inicio.onclick = function() {

    nav_inicio.className = "active";
    nav_proyectos.className = "";

    // cargarInfoInicio();
}

nav_proyectos.onclick = function() {

    nav_inicio.className = "";
    nav_proyectos.className = "active";

    cargarInfoProyectos();
}