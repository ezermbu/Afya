<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {// Utilisation du locale français du Congo
        $faker = Faker::create('fr_CD'); 

        $surnames = [
            'Mobutu', 'Kabila', 'Tshisekedi', 'Lumumba', 'Kasa-Vubu',
            'Muzito', 'Kengo', 'Gizenga', 'Ilunga', 'Mukendi',
            'Mabaya', 'Bokassa', 'Ngbanda', 'Kalonji', 'Mulumba'
        ];

        $FirstNames = [
            'Joseph', 'Félix', 'Étienne', 'Patrice', 'Laurent',
            'Moïse', 'Jean-Pierre', 'Antoine', 'Adolphe', 'Vital',
            'Léon', 'Samy', 'Théophile', 'Albert', 'Augustin'
        ];

        for ($i = 0; $i < 20; $i++) {
            $firstName = $faker->randomElement($FirstNames);
            $lastName = $faker->randomElement($surnames);

            DB::table('patients')->insert([
                'name' => $firstName . ' ' . $lastName,
                'email' => strtolower($firstName . '.' . $lastName . '@gmain.com'),
                'password' => '12345',
                'phone' => $faker->phoneNumber,
                'medical_history' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
