<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

     //con la propiedad fillable le decimos al modelo que solo cree registros con los campos del array
    protected $fillable = ['title', 'description', 'categoria'];
    
     // eloquent protege el campo status ignorando el dato que se le envia desde el formulario y se guardan los demas campos en la bd
     // protected $guarded = ['status'];
    protected $guarded = [];

     // public function getRouteKeyName() // metodo para que laravel busque no por id sino por campo slug
     // {
     //     return 'slug';
     // }


}
