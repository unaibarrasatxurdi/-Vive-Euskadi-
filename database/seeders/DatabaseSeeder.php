<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Planes;
use App\Models\Comentarios;
use App\Models\Favoritos;
use App\Models\Planificacion;
use App\Models\Agrupa;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);*/

        $this->call(UserSeeder::class);

        User::factory(10)->create();
        Planes::factory(10)->create();
        Comentarios::factory(20)->create();
        Favoritos::factory(10)->create();
        Planificacion::factory(10)->create();
        Agrupa::factory(10)->create();

        
    }
}
