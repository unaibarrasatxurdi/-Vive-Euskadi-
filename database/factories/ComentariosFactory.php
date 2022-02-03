<?php

namespace Database\Factories;

use App\Models\Comentarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ComentariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $IdUsuarios = DB::table('users')->pluck('id');
        $documentNames = DB::table('Planes')->pluck('documentName');
        $aleatorio1=random_int(0,count($IdUsuarios)-1);
        $aleatorio2=random_int(0,count($documentNames)-1);

        return [
            'id' => $IdUsuarios[$aleatorio1],
            'DocumentName' => $documentNames[$aleatorio2],
            'Texto' => $this->faker->text(10),
            'Fecha' => $this->faker->dateTime($max = 'now'),
        ];
    }

}
