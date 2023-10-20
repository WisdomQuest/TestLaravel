<?php

namespace Database\Seeders;

use App\Models\AuthorSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       AuthorSkill::factory()->count(50)->create();
    }
}
