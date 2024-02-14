<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblcontrolcarga extends Model
{
    use HasFactory;

    protected $table = "tblcontrolcarga";
    protected $primaryKey = 'id_control_carga';
    protected $fillable = ['id_control_carga', 'id_usuario', 'anio', 'total'];

    public function tblusuarios()
    {
        return $this->belongsTo(Tblusuarios::class, 'id_usuario');
    }
}
