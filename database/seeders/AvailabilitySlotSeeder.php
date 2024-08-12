<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\AvailabilitySlot;
use Carbon\Carbon;

class AvailabilitySlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();

        foreach ($doctors as $doctor) {
            for ($i = 0; $i < 5; $i++) {
                $startTime = Carbon::now()->addDays($i)->setHour(9)->setMinute(0)->setSecond(0);
                $endTime = $startTime->copy()->addHours(8);

                AvailabilitySlot::create([
                    'doctor_id' => $doctor->id,
                    'start_time' => $startTime,
                    'end_time' => $endTime,
                ]);
            }
        }
    }
}
