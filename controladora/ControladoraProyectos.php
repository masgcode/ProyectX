<?php

include('../datos/DatosProyectos.php');
$datosProyectos = new DatosProyectos();

if (isset($_POST['Proyectos'])) {

    $proyectos = $datosProyectos->consultarProyectos();

    foreach ($proyectos as $proyecto) {
        echo "<div class='card-single' onclick='verSeccion(this)'>
                    <input type='text' class='oculto' value='" . $proyecto->getId() . "'>
                    <input type='text' class='oculto' value='Proyectos'>
                    <div>
                        <h1>" . $proyecto->getNombre() . "</h1>
                    </div>
                    <div>
                        <span class='las la-users'></span>
                    </div>
                </div>";
    }
}

if (isset($_POST['tareasProyectos'])) {

    $tareas = $datosProyectos->consultarTareas($_POST['tareasProyectos']);

    foreach ($tareas as $tarea) {
        echo "<tr>
                <td hidden>" . $tarea->getId() . "</td>
                <td>" . $tarea->getNombre() . "</td>
                <td>" . $tarea->getCodigo() . "</td>
                <td>
                    <span class='status green'></span> bien
                </td>
            </tr>";
    }
    
}

if (isset($_POST['tablaProyectos'])) {

    echo "<div class='projects'>
            <div class='card'>

                <div class='card-header'>
                    <h3>Tareas</h3>
                    <button class='boton-principal' onclick='deplegarModal()'>Nuevo <span class='las la-arrow-right'></span></button>
                </div>

                <div class='card-body'>

                    <div class='table-responsive'>
                        <table width='100%'>
                            <thead>
                                <tr>
                                    <td>Nombre de tarea</td>
                                    <td>Identificador</td>
                                    <td>Estado</td>
                                </tr>
                            </thead>
                            <tbody id='tbody'></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>";
}