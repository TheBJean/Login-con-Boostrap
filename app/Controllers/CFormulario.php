<?php

namespace App\Controllers;

class CFormulario extends BaseController
{
    public function formulario(): string
    {
        return view('formularios/VistaFormulario1');
    }

    public function formulario2(): string
    {
        return view('formularios/VistaFormulario2');
    }
}