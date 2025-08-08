<?php

namespace Dao\Paseo;

use Dao\Table;

class PaseoCanino extends Table
{
    public static function obtenerTodos(): array
    {
        $sqlstr = "SELECT * FROM paseo_canino;";
        return self::obtenerRegistros($sqlstr, []);
    }

    public static function obtenerPorId(int $id): array
    {
        $sqlstr = "SELECT * FROM paseo_canino WHERE id = :id;";
        return self::obtenerUnRegistro($sqlstr, ["id" => $id]);
    }

    public static function insertar(array $data): bool
    {
        $sqlstr = "INSERT INTO paseo_canino
            (nombre_dueno, nombre_mascota, tipo_mascota, frecuencia_servicio, direccion, telefono, comentario)
            VALUES (:nombre_dueno, :nombre_mascota, :tipo_mascota, :frecuencia_servicio, :direccion, :telefono, :comentario);";
        return self::executeNonQuery($sqlstr, $data);
    }

    public static function actualizar(int $id, array $data): bool
    {
        $sqlstr = "UPDATE paseo_canino SET
            nombre_dueno = :nombre_dueno,
            nombre_mascota = :nombre_mascota,
            tipo_mascota = :tipo_mascota,
            frecuencia_servicio = :frecuencia_servicio,
            direccion = :direccion,
            telefono = :telefono,
            comentario = :comentario
            WHERE id = :id;";
        $data["id"] = $id;
        return self::executeNonQuery($sqlstr, $data);
    }

    public static function eliminar(int $id): bool
    {
        $sqlstr = "DELETE FROM paseo_canino WHERE id = :id;";
        return self::executeNonQuery($sqlstr, ["id" => $id]);
    }
}
