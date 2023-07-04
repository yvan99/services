<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Superuser;

class SuperuserSeeder extends Seeder
{
    public function run()
    {
        Superuser::factory()->create();
    }
}

?>