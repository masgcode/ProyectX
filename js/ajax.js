function desplegarDatosSeccion(id, modulo) {
    const tabla = document.getElementById('tabla');
    tabla.innerHTML = "";
    const ajax = new XMLHttpRequest();
    ajax.open('POST', './controladora/Controladora' + modulo + '.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            tabla.innerHTML = ajax.responseText;
            desplegarDatos(id, modulo);
        }
    }
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send('tabla' + modulo);
}

function desplegarDatos(id, modulo) {
    const tbody = document.getElementById('tbody');
    tbody.innerHTML = "";
    const ajax = new XMLHttpRequest();
    ajax.open('POST', './controladora/Controladora' + modulo + '.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            tbody.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send('tareas' + modulo + "=" + id);
}

// function enviar(url, datos) {
//     const ajax = new XMLHttpRequest();
//     ajax.open('POST', url, true);
//     ajax.onreadystatechange = function() {
//         if (ajax.readyState === 4) {

//             let resultado = ajax.responseText;
//             console.log("Resultado Enviar: [" + resultado + "].");
//         }
//     }
//     ajax.send(datos);
// }

function desplegarModulo(modulo) {
    const main = document.getElementById('app');
    main.innerHTML = "";
    const ajax = new XMLHttpRequest();
    ajax.open('POST', './controladora/Controladora' + modulo + '.php', true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState === 4) {
            main.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(modulo);
}