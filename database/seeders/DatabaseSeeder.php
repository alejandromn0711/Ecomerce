<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Producto;
use App\models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Producto::factory(20)->create();
    }
}
