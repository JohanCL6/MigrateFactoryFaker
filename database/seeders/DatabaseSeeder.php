<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /* $this->call(CommentSeeder::class); */
        /* $this->call([
            ProductoSeeder::class,
            CommentSeeder::class,
            CountrySeeder::class,
        ]); */

        $this->call(VentaSeeder::class);
    }
}
