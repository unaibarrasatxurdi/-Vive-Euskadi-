<?php

namespace Database\Factories;

use App\Models\Planes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlanesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $planes_json = file_get_contents('https://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/planes_experiencias_euskadi/opendata/planes.json');

        $decoded_json = json_decode($planes_json, true);

        //$documentName = $decoded_json['documentName'];
        echo $decoded_json;
        return [
            'DocumentName' => $decoded_json/*$documentName/**[random_int(0, $documentName.count())]**/,
            'Provincia' => Str::random(10),
        ];
    }

}
