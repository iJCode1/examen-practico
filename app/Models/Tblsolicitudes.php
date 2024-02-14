<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblsolicitudes extends Model
{
    use HasFactory;

    protected $table = "tblsolicitudes";
    protected $primaryKey = 'id_solicitud';
    protected $fillable = ['id_solicitud', 'id_usuario_asignado', 'nombre_solicitante', 'paterno_solicitante', 'materno_solicitante', 'activo', 'fecha_solicitud'];

    public function tblusuarios()
    {
        return $this->belongsTo(Tblusuarios::class, 'id_usuario_asignado', 'id_usuario');
    }
}
