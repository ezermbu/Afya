<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;
use App\Models\Hospital;
use Illuminate\Support\Facades\DB;

class HospitalPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patients = Patient::all();
        $hospitals = Hospital::all();

        for ($i = 0; $i < 20; $i++) {
            DB::table('hospital_patients')->insert([
                'patient_id' => $patients->random()->id,
                'hospital_id' => $hospitals->random()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
