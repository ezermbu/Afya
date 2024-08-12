<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Prelevement;
use Faker\Factory as Faker;

class PrelevementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $patients = Patient::take(10)->get();

        foreach ($patients as $patient) {
            Prelevement::create([
                'patient_id' => $patient->id,
                'rythme_cardiaque' => $faker->numberBetween(60, 100),
                'temperature' => $faker->randomFloat(2, 36.0, 38.0),
                'frequence_respiratoire' => $faker->numberBetween(12, 20),
                'temperature_ambiante' => $faker->randomFloat(2, 20.0, 25.0),
                'pression_arterielle' => $faker->numberBetween(90, 140) . '/' . $faker->numberBetween(60, 90),
                'saturation_oxygene' => $faker->randomFloat(2, 95.0, 100.0),
                'statut' => 'non vérifié',
            ]);
        }
    }
}
