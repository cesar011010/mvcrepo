<?php

namespace Controllers\Paseo;

use Controllers\PublicController;
use Views\Renderer;
use Dao\Paseo\PaseoCanino;

class ListadoController extends PublicController
{
    public function run(): void
    {
        $datos = PaseoCanino::obtenerTodos();
        Renderer::render("paseo/listado", ["paseos" => $datos]);
    }
}
