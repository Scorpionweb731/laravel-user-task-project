<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class UserTasksSeeder extends Seeder
{
    public function run()
    {
        // Example data
        DB::table('tasks')->insert([
            [
                'task_detail' => ' documentation',
                'task_type' => 'done',
                'user_id' => 1, // Ensure that this user ID exists in the users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_detail' => 'authentication',
                'task_type' => 'pending',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'task_detail' => 'client meeting',
                'task_type' => 'done',
                'user_id' => 3, // Ensure that this user ID exists in the users table
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Aap aur bhi data yahan add kar sakte hain
        ]);
    }
}
