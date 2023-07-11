<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cell;

class CellSeeder extends Seeder
{
    public function run()
    {
        Cell::factory(5)->create();
    }
}

?>