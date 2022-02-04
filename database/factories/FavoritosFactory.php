<?php

namespace Database\Factories;

use App\Models\Favoritos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FavoritosFactory extends Factory
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
        do{     
            $aleatorio1=random_int(0,count($IdUsuarios)-1);
            $aleatorio2=random_int(0,count($documentNames)-1);
            $existe = DB::select('select id, DocumentName from favoritos where id = ? and DocumentName = ?', [$IdUsuarios[$aleatorio1], $documentNames[$aleatorio2]]);
            
        }while(count($existe)!=0);

        return [
            'id' => $IdUsuarios[$aleatorio1],
            'DocumentName' => $documentNames[$aleatorio2],
        ];
    }

}
