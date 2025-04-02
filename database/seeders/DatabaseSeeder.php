<?php

namespace Database\Seeders;

use App\Models\Students;
use App\Models\User;
use Database\Factories\StudentsFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //     \App\Models\User::factory(30)->create();
    //    \App\Models\Students::factory(30)->create();
    //    \App\Models\Employee::factory(27)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(EmployeesTableSeeder::class);
    }
    
}
