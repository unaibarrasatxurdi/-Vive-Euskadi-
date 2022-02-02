<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //* Usuario 1 */
        $user1 = new User();

        $user1->name = "María";
        $user1->email = "magomez294@gmail.com";
        $user1->password = Hash::make("admin123");
        $user1->admin = "1";
        
        $user1->save();

        //* Usuario 2 */
        $user2 = new User();

        $user2->name = "Eneko";
        $user2->email = "enekovilamor@gmail.com";
        $user2->password = Hash::make("admin123");
        $user2->admin = "1";
        
        $user2->save();

        //* Usuario 3 */
        $user3 = new User();

        $user3->name = "Urko";
        $user3->email = "urkoruemaguna@gmail.com";
        $user3->password = Hash::make("admin123");
        $user3->admin = "1";
        
        $user3->save();

        //* Usuario 4 */
        $user4 = new User();

        $user4->name = "Arkaitz";
        $user4->email = "arkaitz.garot@gmail.com";
        $user4->password = Hash::make("admin123");
        $user4->admin = "1";
        
        $user4->save();

        //* Usuario 5 */
        $user5 = new User();

        $user5->name = "Ekaitz";
        $user5->email = "ekaitzmcbo@gmail.com";
        $user5->password = Hash::make("admin123");
        $user5->admin = "1";
        
        $user5->save();
    }
}
