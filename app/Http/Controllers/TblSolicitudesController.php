<?php

namespace App\Http\Controllers;

use App\Models\Tblcontrolcarga;
use App\Models\Tblsolicitudes;
use Illuminate\Http\Request;

class TblSolicitudesController extends Controller
{
    public function asignarSolicitud($nombre_solicitante, $paterno_solicitante, $materno_solicitante, $activo, $fecha_solicitud)
    {
        $user_menos_carga = Tblcontrolcarga::orderBy('total', 'asc')->first();
        
        $solicitud = new Tblsolicitudes;
        $solicitud->id_usuario_asignado = $user_menos_carga->id_usuario;
        $solicitud->nombre_solicitante = $nombre_solicitante;
        $solicitud->paterno_solicitante = $paterno_solicitante;
        $solicitud->materno_solicitante = $materno_solicitante;
        $solicitud->activo = $activo;
        $solicitud->fecha_solicitud = $fecha_solicitud;
        $solicitud->save();

        Tblcontrolcarga::where('id_usuario', $user_menos_carga->id_usuario)
        ->update(['total' => $user_menos_carga->total + 1]);

        return response()->json($solicitud);
    }
}
