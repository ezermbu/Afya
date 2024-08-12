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
    {
        $faker = Faker::create('fr_CD');

        DB::table('patients')->insert([
            'name' => 'Michael Miema',
            'email' => 'michael@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Félix Kabila',
            'email' => 'felix.kabila@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Étienne Tshisekedi',
            'email' => 'etienne.tshisekedi@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Patrice Lumumba',
            'email' => 'patrice.lumumba@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Laurent Kasa-Vubu',
            'email' => 'laurent.kasa-vubu@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Moïse Muzito',
            'email' => 'moise.muzito@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Jean-Pierre Kengo',
            'email' => 'jean-pierre.kengo@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Antoine Gizenga',
            'email' => 'antoine.gizenga@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Adolphe Ilunga',
            'email' => 'adolphe.ilunga@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Vital Mukendi',
            'email' => 'vital.mukendi@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Léon Mabaya',
            'email' => 'leon.mabaya@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Samy Bokassa',
            'email' => 'samy.bokassa@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Théophile Ngbanda',
            'email' => 'theophile.ngbanda@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Albert Kalonji',
            'email' => 'albert.kalonji@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Augustin Mulumba',
            'email' => 'augustin.mulumba@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Joseph Kabila',
            'email' => 'joseph.kabila@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Félix Tshisekedi',
            'email' => 'felix.tshisekedi@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Étienne Lumumba',
            'email' => 'etienne.lumumba@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Patrice Kasa-Vubu',
            'email' => 'patrice.kasa-vubu@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('patients')->insert([
            'name' => 'Laurent Muzito',
            'email' => 'laurent.muzito@gmail.com',
            'password' => '12345',
            'phone' => $faker->phoneNumber,
            'medical_history' => $faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
