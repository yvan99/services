<?php

namespace Database\Seeders;

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
        $this->call([
            CategorySeeder::class,
            SectorSeeder::class,
            CellSeeder::class,
            ServiceSeeder::class,
            SuperuserSeeder::class,
        ]);
    }
}
