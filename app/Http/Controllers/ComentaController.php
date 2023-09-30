<?php

namespace App\Http\Controllers;

use App\Models\comenta;
use Illuminate\Http\Request;

class ComentaController extends Controller{

    public function index(){
        $comenta = comenta::all();
        return response()->json($comenta);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'review_id' => 'required|integer',
            'usuario_login' => 'required|string',
            'comentario' => 'required|string',
        ]);

        $comenta = comenta::create($validatedData);

        return response()->json($comenta, 201);
    }

    public function show(comenta $comenta){
        return response()->json($comenta);
    }

    public function update(Request $request, comenta $comenta){
        $validatedData = $request->validate([
            'review_id' => 'required|integer',
            'usuario_login' => 'required|string',
            'comentario' => 'required|string',
        ]);

        $comenta->update($validatedData);
        return response()->json($comenta, 200);
    }

    public function destroy(comenta $comenta){
        $comenta->delete();

        return response()->json(null, 204);
    }
}