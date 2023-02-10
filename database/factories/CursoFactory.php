<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;
// use Illuminate\Support\Str; // se importa la clase Str para usarla en el slug


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Curso::class;

    public function definition()    //esta fabrica rellena la bd con datos de prueba
    {
        $name=$this->faker->sentence();

        return [
             //'name'=>$this->faker->sentence(),
            'title'=>$name,
             // 'slug'=>Str::slug($name, '-'), // el ayudante slug transforma la cadena en minuscula y los espacios los reemplaza por el guion
            'description'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];   
    }
}
