<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblusuarios extends Model
{
    use HasFactory;

    protected $table = "tblusuarios";
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['id_usuario', 'nombre', 'paterno', 'materno', 'login', 'password', 'activo', 'cve_grupo'];

    public function tblgrupos_sistema()
    {
        return $this->belongsTo(Tblgrupos_Sistema::class, 'cve_grupo', 'cve_grupo_sistema');
    }
}
