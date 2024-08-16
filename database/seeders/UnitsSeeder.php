<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // English Units
        Unit::create([
            'name' => 'Introduction to English',
            'description' => 'Basic English concepts',
            'image_url' => 'english_intro.png',
            'subject_id' => 1, // Assuming 'English' subject ID is 1
        ]);

        Unit::create([
            'name' => 'Advanced English Grammar',
            'description' => 'Advanced topics in English grammar',
            'image_url' => 'advanced_english.png',
            'subject_id' => 1, // Assuming 'English' subject ID is 1
        ]);

        // C++ Units
        Unit::create([
            'name' => 'Basic C++',
            'description' => 'Getting started with C++ programming',
            'image_url' => 'cpp_basic.png',
            'subject_id' => 2, // Assuming 'C++' subject ID is 2
        ]);

        Unit::create([
            'name' => 'Object-Oriented C++',
            'description' => 'Learn object-oriented programming with C++',
            'image_url' => 'cpp_oop.png',
            'subject_id' => 2, // Assuming 'C++' subject ID is 2
        ]);

        // Python Units
        Unit::create([
            'name' => 'Python Basics',
            'description' => 'Learn the basics of Python',
            'image_url' => 'python_basics.png',
            'subject_id' => 3, // Assuming 'Python' subject ID is 3
        ]);

        Unit::create([
            'name' => 'Python Data Structures',
            'description' => 'Learn about data structures in Python',
            'image_url' => 'python_data_structures.png',
            'subject_id' => 3, // Assuming 'Python' subject ID is 3
        ]);

        // Maths Units
        Unit::create([
            'name' => 'Algebra',
            'description' => 'Fundamentals of Algebra',
            'image_url' => 'algebra.png',
            'subject_id' => 4, // Assuming 'Maths' subject ID is 4
        ]);

        Unit::create([
            'name' => 'Calculus',
            'description' => 'Introduction to Calculus',
            'image_url' => 'calculus.png',
            'subject_id' => 4, // Assuming 'Maths' subject ID is 4
        ]);

        // Physics Units
        Unit::create([
            'name' => 'Mechanics',
            'description' => 'Introduction to Physics mechanics',
            'image_url' => 'mechanics.png',
            'subject_id' => 5, // Assuming 'Physics' subject ID is 5
        ]);

        Unit::create([
            'name' => 'Thermodynamics',
            'description' => 'Basics of thermodynamics',
            'image_url' => 'thermodynamics.png',
            'subject_id' => 5, // Assuming 'Physics' subject ID is 5
        ]);

        // Chemistry Units
        Unit::create([
            'name' => 'Organic Chemistry',
            'description' => 'Basics of organic chemistry',
            'image_url' => 'organic_chemistry.png',
            'subject_id' => 6, // Assuming 'Chemistry' subject ID is 6
        ]);

        Unit::create([
            'name' => 'Inorganic Chemistry',
            'description' => 'Fundamentals of inorganic chemistry',
            'image_url' => 'inorganic_chemistry.png',
            'subject_id' => 6, // Assuming 'Chemistry' subject ID is 6
        ]);

        // Java Units
        Unit::create([
            'name' => 'Java Fundamentals',
            'description' => 'Learn the fundamentals of Java programming',
            'image_url' => 'java_fundamentals.png',
            'subject_id' => 7, // Assuming 'Java' subject ID is 7
        ]);

        Unit::create([
            'name' => 'Advanced Java',
            'description' => 'Advanced topics in Java programming',
            'image_url' => 'advanced_java.png',
            'subject_id' => 7, // Assuming 'Java' subject ID is 7
        ]);

        // Arabic Units
        Unit::create([
            'name' => 'Arabic Grammar',
            'description' => 'Learn the basics of Arabic grammar',
            'image_url' => 'arabic_grammar.png',
            'subject_id' => 8, // Assuming 'Arabic' subject ID is 8
        ]);

        Unit::create([
            'name' => 'Arabic Literature',
            'description' => 'Introduction to Arabic literature',
            'image_url' => 'arabic_literature.png',
            'subject_id' => 8, // Assuming 'Arabic' subject ID is 8
        ]);
    }
}
