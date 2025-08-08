<?php

namespace Controllers\Paseo;

use Controllers\PublicController;
use Views\Renderer;
use Dao\Paseo\PaseoCanino;

class FormularioController extends PublicController
{
    public function run(): void
    {
        $modo = $_GET["mode"] ?? "INS";
        $id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;
        $datos = [
            "mode" => $modo,
            "id" => $id,
            "nombre_dueno" => "",
            "nombre_mascota" => "",
            "tipo_mascota" => "",
            "frecuencia_servicio" => "",
            "direccion" => "",
            "telefono" => "",
            "comentario" => ""
        ];

        if ($modo !== "INS") {
            $registro = PaseoCanino::obtenerPorId($id);
            if ($registro) {
                $datos = array_merge($datos, $registro);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $postData = [
                "nombre_dueno" => $_POST["nombre_dueno"] ?? "",
                "nombre_mascota" => $_POST["nombre_mascota"] ?? "",
                "tipo_mascota" => $_POST["tipo_mascota"] ?? "",
                "frecuencia_servicio" => $_POST["frecuencia_servicio"] ?? "",
                "direccion" => $_POST["direccion"] ?? "",
                "telefono" => $_POST["telefono"] ?? "",
                "comentario" => $_POST["comentario"] ?? ""
            ];

            if ($modo === "INS") {
                PaseoCanino::insertar($postData);
            } elseif ($modo === "UPD") {
                PaseoCanino::actualizar($id, $postData);
            } elseif ($modo === "DEL") {
                PaseoCanino::eliminar($id);
            }

            header("Location: index.php?page=Paseo-Listado");
            exit;
        }

        Renderer::render("paseo/formulario", $datos);
    }
}
