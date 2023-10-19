<?php

namespace Database\Seeders;

use App\Models\NumberPhone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NumberPhone::factory()->count(10)->create();
    }
}
