<?php

namespace Database\Factories;

use App\Models\Planificacion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PlanificacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $IdUsuarios = DB::table('users')->pluck('id');
        $aleatorio1=random_int(0,count($IdUsuarios)-1);

        return [
            'id' => $IdUsuarios[$aleatorio1],
            'NombrePlanificacion' => Str::random(10),
            'Descripcion' => Str::random(20),
        ];
    }

}
