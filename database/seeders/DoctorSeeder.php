<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialties = ['Cardiology', 'Neurology', 'Pediatrics', 'Oncology', 'Orthopedics'];
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 2; $j++) {
                DB::table('doctors')->insert([
                    'hospital_id' => $i,
                    'name' => $faker->name,
                    'specialty' => $specialties[array_rand($specialties)],
                    'email' => Str::slug($faker->name) . '@gmail.com',
                    'password' => '12345',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
