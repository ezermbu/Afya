<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            HospitalSeeder::class,
            DoctorSeeder::class,
            PatientSeeder::class,
            HospitalPatientSeeder::class,
            /*AppointmentSeeder::class,
            VitalSignSeeder::class,
            AvailabilitySlotSeeder::class,
            SubscriptionSeeder::class,
            PatientReportSeeder::class,
            DoctorReportSeeder::class,
            TeleconsultationSeeder::class*/
        ]);
    }
}
