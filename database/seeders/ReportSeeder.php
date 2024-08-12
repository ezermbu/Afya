<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report;
use App\Models\Doctor;
use App\Models\Patient;
use Faker\Factory as Faker;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $doctors = Doctor::all();
        $patients = Patient::all();

        // Create 3 reports for the first patient
        $firstPatient = $patients->first();

        for ($i = 0; $i < 3; $i++) {
            Report::create([
                'doctor_id' => $doctors->random()->id,
                'patient_id' => $firstPatient->id,
                'title' => $faker->sentence(),
                'diagnosis' => $faker->text(),
                'date' => $faker->date(),                
            ]);
        }
    }
}
