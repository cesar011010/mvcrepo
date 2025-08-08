<section>
    <h2>Listado de Paseos Caninos</h2>
    <a href="index.php?page=Paseo-Formulario&mode=INS">Nuevo Registro</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Dueño</th>
            <th>Mascota</th>
            <th>Tipo</th>
            <th>Frecuencia</th>
            <th>Acciones</th>
        </tr>
        {{foreach paseos}}
        <tr>
            <td>{{id}}</td>
            <td>{{nombre_dueno}}</td>
            <td>{{nombre_mascota}}</td>
            <td>{{tipo_mascota}}</td>
            <td>{{frecuencia_servicio}}</td>
            <td>
                <a href="index.php?page=Paseo-Formulario&mode=UPD&id={{id}}">Editar</a>
                <a href="index.php?page=Paseo-Formulario&mode=DEL&id={{id}}">Eliminar</a>
                <a href="index.php?page=Paseo-Formulario&mode=DSP&id={{id}}">Ver</a>
            </td>
        </tr>
        {{endfor paseos}}
    </table>
</section>

