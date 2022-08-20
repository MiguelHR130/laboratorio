<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use Validator;
use Illuminate\Validation\Rule;
use DB;

class PacienteController extends Controller
{
    
   public function index(request $request)
    {
        $paciente = DB::table('paciente')->get()->toArray();
        return response()->json($paciente);
    }
}
