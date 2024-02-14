<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tblgrupos_Sistema extends Model
{
    use HasFactory;

    protected $table = "tblgrupos_sistema";
    protected $primaryKey = 'cve_grupo_sistema';
    protected $fillable = ['cve_grupo_sistema', 'descripcion_grupo', 'activo'];

}
