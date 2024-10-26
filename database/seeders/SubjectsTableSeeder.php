<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            ['name' => 'Basic Addition'],
            ['name' => 'Basic Subtraction'],
            ['name' => 'Basic Multiplication'],
            ['name' => 'Basic Division'],
        ]);
    }
}
