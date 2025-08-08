<section>
    <h2>{{if mode == 'INS'}}Nuevo Paseo Canino{{endif}}
        {{if mode == 'UPD'}}Editar Paseo Canino{{endif}}
        {{if mode == 'DEL'}}Eliminar Paseo Canino{{endif}}
        {{if mode == 'DSP'}}Detalle Paseo Canino{{endif}}
    </h2>
    <form method="post">
        <label>Nombre Dueño:
            <input type="text" name="nombre_dueno" value="{{nombre_dueno}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Nombre Mascota:
            <input type="text" name="nombre_mascota" value="{{nombre_mascota}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Tipo Mascota:
            <input type="text" name="tipo_mascota" value="{{tipo_mascota}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Frecuencia Servicio:
            <input type="text" name="frecuencia_servicio" value="{{frecuencia_servicio}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Dirección:
            <input type="text" name="direccion" value="{{direccion}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Teléfono:
            <input type="text" name="telefono" value="{{telefono}}" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>
        </label><br>
        <label>Comentario:
            <textarea name="comentario" {{if mode == 'DEL' || mode == 'DSP'}}readonly{{endif}}>{{comentario}}</textarea>
        </label><br>

        {{if mode != 'DSP'}}
        <button type="submit">Guardar</button>
        {{endif}}
    </form>
</section>

