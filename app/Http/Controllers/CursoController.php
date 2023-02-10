<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // usar orm eloquent en index (tratar los registros como objetos) en lugar de querybuilder
    // index: listado de juguetes
    public function index(){
        // al hacer clic en menu cursos, la ruta index llama al controlador y 
        // el metodo index recupera los registros de bd y se los envia a la vista index para ser mostrados al usuario
        // en el objeto cursos conseguir (get) y guardar todos los registros de la bd en orden 
        // descendente para luego enviarlos a la vista toyIndex con compact
        $cursos = Curso::orderByDesc('id')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function show(){
        
    }

    public function create(){
        
    }

    public function store(){
        
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function destroy(){
        
    }
}
