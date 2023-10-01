<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    public function index(){
        $usuario = usuario::all();
        return response()->json($usuario);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'login' => 'required|string',
            'senha' => 'required|string',
            'email' => 'required|string',
            'data_de_nascimento' => 'required|date',
            'genero' => 'required|string',
            'foto_de_perfil' => 'required|integer',
        ]);

        $usuario = usuario::create($validatedData);

        return response()->json($usuario, 201);
    }

    public function show(usuario $usuario){
        return response()->json($usuario);
    }

    public function update(Request $request, usuario $usuario){
        $validatedData = $request->validate([
            'login' => 'required|string',
            'senha' => 'required|string',
            'email' => 'required|string',
            'data_de_nascimento' => 'required|date',
            'genero' => 'required|string',
            'foto_de_perfil' => 'required|integer',
        ]);

        $usuario->update($validatedData);
        return response()->json($usuario, 200);
    }

    public function destroy(usuario $usuario){
        $usuario->delete();

        return response()->json(null, 204);
    }
}