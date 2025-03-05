<?php

namespace Database\Seeders;

use App\Models\Relevee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relevee::factory(100)->create();
    }
}
