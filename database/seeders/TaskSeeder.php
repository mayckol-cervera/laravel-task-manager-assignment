<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Learn Laravel',
            'description' => 'Study routing and controllers',
            'is_completed' => false
        ]);

        Task::create([
            'title' => 'Build Task Manager',
            'description' => 'Complete the assignment',
            'is_completed' => true
        ]);

        Task::create([
            'title' => 'Push to GitHub',
            'description' => 'Submit project repository',
            'is_completed' => false
        ]);
    }
}