<?php

namespace Database\Seeders;

use App\Models\Petition;
use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Petition::factory(50)->create();
    }
}
