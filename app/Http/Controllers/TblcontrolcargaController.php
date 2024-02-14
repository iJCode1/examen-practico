<?php

namespace App\Http\Controllers;

use App\Models\Tblcontrolcarga;
use Illuminate\Http\Request;

class TblcontrolcargaController extends Controller
{
    public function registerCarga($id_usuario, $anio, $total)
    {
        $carga = new Tblcontrolcarga();
        $carga->id_usuario = $id_usuario;
        $carga->anio = $anio;
        $carga->total = $total;
        $carga->save(); 

        return response()->json($carga);
    }
}
