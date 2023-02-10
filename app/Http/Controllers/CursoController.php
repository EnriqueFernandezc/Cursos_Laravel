<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Storage;

class CursoController extends Controller
{
    public function index()
    {
        // index: listado de juguetes
        // usar orm eloquent en index (tratar los registros como objetos) en lugar de querybuilder
        // al hacer clic en menu cursos, la ruta index llama al controlador y 
        // el metodo index recupera los registros de bd y se los envia a la vista index para ser mostrados al usuario
        // en el objeto cursos conseguir (get) y guardar todos los registros de la bd en orden 
        // descendente para luego enviarlos a la vista Index con compact
        $cursos = Curso::orderByDesc('id')->get();
        return view('cursos.index', compact('cursos'));
    }


    // metodo show mostrara el detalle de un solo juguete pasando a la vista
    // un objeto, es decir, un registro de la bd
    public function show(Curso $curso)
    {
        // return $toy;
        return view('cursos.show', compact('curso'));
    }


    public function create()
    {
        return view('cursos.create');
    }


    public function store(StoreCurso $request)
    {
        // solo los datos validados del formulario se guardaran en la bd
        $curso = Curso::create($request->validated());

        $url = '';
        // si la request tiene una imagen ejecutar codigo
        if ($request->hasFile('img')) {
            // el fichero request 'img' se guardara en la carpeta privada
            // storage 'public/toy' y su ruta se guardara en $url
            $url = Storage::url($request->file('img')->store('public/curso'));
        }

        // el atributo img de $toy sera igual a $url
        // es decir se agrega la url de la imagen en la bd
        $curso->img = $url;

        //guardar
        $curso->saveOrFail();

        //redirigir al listado (index) despues de guardar
        return redirect()->route('cursos.index');

        // redirigir al articulo creado
        // return redirect()->route('cursos.show', $curso);
    }


    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }


    public function update()
    {
    }


    public function destroy()
    {
    }
}
