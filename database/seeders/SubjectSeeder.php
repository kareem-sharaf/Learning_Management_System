<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'id' => '1',
            'name' => 'physics',
            'description' => 'asdf',
            'class_id' => '2'

        ]);
        Subject::create([
            'id' => '2',
            'name' => 'chemistry',
            'description' => '2asdf',
            'class_id' => '3'
        ]);
        Subject::create([
            'id' => '3',
            'name' => 'programming',
            'description' => '2ffs',
            'class_id' => '3'
        ]);
        Subject::create([
            'id' => '4',
            'name' => 'maths',
            'description' => '2sdf',
            'class_id' => '1'
        ]);
    }
}
