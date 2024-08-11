<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hospitals = [
            [
                'name' => 'Hôpital Général de Référence de Kinshasa',
                'address' => 'Avenue de la Libération, Kinshasa',
                'email' => 'info@hgrk.cd',
            ],
            [
                'name' => 'Centre Hospitalier Universitaire de Kinshasa',
                'address' => 'Avenue de l\'Université, Kinshasa',
                'email' => 'contact@chu-kinshasa.cd',
            ],
            [
                'name' => 'Hôpital du Cinquantenaire de Kinshasa',
                'address' => 'Boulevard Triomphal, Kinshasa',
                'email' => 'info@hopital-cinquantenaire.cd',
            ],
            [
                'name' => 'Clinique Ngaliema',
                'address' => 'Avenue des Cliniques, Kinshasa',
                'email' => 'info@clinique-ngaliema.cd',
            ],
            [
                'name' => 'Centre Hospitalier Monkole',
                'address' => 'Avenue Monkole, Mont-Ngafula, Kinshasa',
                'email' => 'contact@monkole.cd',
            ],
        ];

        foreach ($hospitals as $hospital) {
            DB::table('hospitals')->insert([
                'name' => $hospital['name'],
                'address' => $hospital['address'],
                'email' => $hospital['email'],
                'password' => '12345',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
