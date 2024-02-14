<?php

namespace App\Http\Controllers;

use App\Models\Tblgrupos_Sistema;
use Illuminate\Http\Request;

class TblgruposSistemasController extends Controller
{
    public function showGrupos()
    {
        $grupos = Tblgrupos_Sistema::all();
        return response()->json($grupos);
    }
}
