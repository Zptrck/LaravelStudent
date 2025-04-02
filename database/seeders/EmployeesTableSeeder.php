<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $faker = Faker::create();

    //     foreach (range(1, 100) as $index) { // Generate 50 fake records
    //         DB::table('employees')->insert([
    //             'email' => $faker->unique()->safeEmail(),
    //             'password' => bcrypt('password'), // You can set a default password
    //             'first_name' => $faker->firstName(),
    //             'middle_name' => $faker->optional()->firstName(),
    //             'last_name' => $faker->lastName(),
    //             'uli_no' => $faker->uuid(),
    //             'entry_date' => $faker->dateTime(),
    //             'barangay' => $faker->city(),
    //             'city' => $faker->city(),
    //             'province' => $faker->state(),
    //             'region' => $faker->state(),
    //             'contact_no' => $faker->phoneNumber(),
    //             'nationality' => $faker->country(),
    //             'sex' => $faker->randomElement(['Male', 'Female']),
    //             'civil_status' => $faker->randomElement(['Single', 'Married', 'Divorced']),
    //             'employment' => $faker->jobTitle(),
    //             'bdate' => $faker->date(),
    //             'bplace' => $faker->city(),
    //             'educ_attain' => $faker->randomElement(['High School', 'Bachelor\'s Degree', 'Master\'s Degree']),
    //             'parent' => $faker->name(),
    //             'parent_address' => $faker->address(),
    //             'learner_classification' => $faker->randomElement(['Regular', 'Special', 'Non-Formal']),
    //             'type_of_disability' => $faker->randomElement(['None', 'Physical', 'Mental', 'Sensory']), // Ensure it always gets a value
    //             'cause_of_disability' => $faker->sentence(), // Ensure it always gets a value
    //             'name_course' => $faker->word(),
    //             'scholar' => $faker->randomElement(['Yes', 'No']),
    //             'privacy_consent' => $faker->randomElement(['Yes', 'No']),
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    //     }
     }
}