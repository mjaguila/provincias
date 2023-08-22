<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincia;
use Illuminate\Support\Facades\Validator;

class ProvinciaController extends Controller
{
    public function index()
    {
        $provincias = Provincia::all();

        return view('provincias', compact('provincias'));
    }

    public function store(Request $request)
    {
        $rules = [
            'detalle' => 'required|max:100',
        ];  

        $validator = Validator::make($request->all(), $rules);
        
        if ($validator->fails()) {
            return redirect('/provincias')->with('error', 'Error al crear la provincia');
        }  

        $provincia = new Provincia();
        $provincia->detalle = $request->get('detalle');     
        $provincia->save(); 

        return redirect('/provincias')->with('success', 'Provincia creada exitosamente');
    }
}
