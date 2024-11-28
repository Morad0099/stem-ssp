<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classes;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $classes = [
            ['class_name' => 'Kindergarten', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Nursery', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Primary 1', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Primary 2', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Primary 3', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Primary 4', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'Primary 5', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'JHS 1', 'school_id' => 4, 'index_number_required' => false],
            ['class_name' => 'SHS 1', 'school_id' => 4, 'index_number_required' => true],
        ];

        foreach ($classes as $class) {
            \App\Models\Classes::create($class);
        }
    }
}
