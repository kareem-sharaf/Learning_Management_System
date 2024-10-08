<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\File;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        File::create([
            'id' => '1',
            'name' => 'part 1',
            'unit_id' => '1',
            'subject_id' => '0',
            'lesson_id' => '0',
            'file' => '2.pdf',

        ]);
        File::create([
            'id' => '2',
            'name' => 'part 1',
            'unit_id' => '2',
            'subject_id' => '0',
            'lesson_id' => '0',
            'file' => '2.pdf',

        ]);
    }
}
