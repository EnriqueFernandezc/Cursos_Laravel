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


    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    public function update(StoreCurso $request, Curso $curso)
    {
        // se pasa el array del request al método fill y este se encarga de actualizar
        // los campos permitidos en el registro de la bd
        // $curso->update($request->all());
        $curso->fill($request->validated());

        // $curso->title=$request->title;
        // $curso->description=$request->description;
        // $curso->categoria=$request->categoria;
        // $curso->save();

        //guardar la imagen enviada desde el formulario
        $url = '';
        // si la request tiene una imagen ejecutar codigo
        if ($request->hasFile('img')) {
            // el fichero request 'img' se guardara en la carpeta privada
            // storage 'public/curso' y su ruta se guardara en $url
            $url = Storage::url($request->file('img')->store('public/curso'));
        }

        // el atributo img de $curso sera igual a $url
        // es decir se agrega la url de la imagen en la bd
        $curso->img = $url;

        //guardar
        $curso->saveOrFail();

        //redirigir al curso actualizado despues de guardar
        // return redirect()->route('cursos.show', $curso);
        return redirect()->route('cursos.show', $curso);
    }


    public function destroy(Curso $curso)
    { // el controlador recibe la variable curso que se envia desde la ruta destroy y pasa a ser una instancia de la clase curso
        $curso->deleteOrFail(); // eliminar el curso
        return redirect()->route('cursos.index'); // redirecciona a la pagina index despues de eliminar
    }
}
