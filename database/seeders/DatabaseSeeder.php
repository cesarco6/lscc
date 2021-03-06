<?php

namespace Database\Seeders;

use App\Models\Prospect;
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
        Prospect::factory(5200)->create();
    }
}
