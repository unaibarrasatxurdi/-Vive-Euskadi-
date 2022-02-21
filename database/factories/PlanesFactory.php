<?php

namespace Database\Factories;

use App\Models\Planes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PlanesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //lee el json de la web para generar nombres y probbincias que tengan sentido
        $url = "https://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/planes_experiencias_euskadi/opendata/planes.json";
        

        $planes_json = file_get_contents($url);
        $planes_json = substr($planes_json, 13, -2);
        $decoded_json = json_decode($planes_json, true);
        $numero = random_int(0, count($decoded_json)-1);
        $nombre = $decoded_json[$numero]['documentName'];
        $provincia = $decoded_json[$numero]['territory'];
        $documentNames = DB::table('Planes')->pluck('documentName');
        while ($documentNames->contains($nombre)) {
            $numero = random_int(0, count($decoded_json)-1);
            $nombre = $decoded_json[$numero]['documentName'];
            $provincia = $decoded_json[$numero]['territory'];
        }

        return [
            'DocumentName' => $nombre,
            'Provincia' => $provincia,
        ];
    }

}
