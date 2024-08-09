<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VitalSignController;
use App\Http\Controllers\DoctorAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientAuthController;
use App\Http\Controllers\HospitalAuthController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PatientReportController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AvailabilitySlotController;
use App\Http\Controllers\TeleconsultationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('admin/hospitals', [HospitalController::class, 'index']);
Route::get('admin/hospitals/create', [HospitalController::class, 'create']);
Route::post('admin/hospitals', [HospitalController::class, 'store']);

Route::get('admin/dashboard', [AdminDashboardController::class, 'index']);





Route::get('hospital/login', [HospitalAuthController::class, 'showLoginForm'])->name('hospital.login');
Route::post('hospital/login', [HospitalAuthController::class, 'login']);
Route::post('hospital/logout', [HospitalAuthController::class, 'logout'])->name('hospital.logout');

Route::get('hospital/doctors', [DoctorController::class, 'index']);
Route::get('hospital/doctors/create', [DoctorController::class, 'create']);
Route::post('hospital/doctors', [DoctorController::class, 'store']);
Route::get('hospital/doctors/{id}/edit', [DoctorController::class, 'edit']);
Route::put('hospital/doctors/{id}', [DoctorController::class, 'update']);
Route::delete('hospital/doctors/{id}', [DoctorController::class, 'destroy']);

Route::get('hospital/reports', [ReportController::class, 'index']);

Route::get('hospital/patient-reports', [PatientReportController::class, 'index']);





Route::get('doctor/login', [DoctorAuthController::class, 'showLoginForm'])->name('doctor.login');
Route::post('doctor/login', [DoctorAuthController::class, 'login']);
Route::post('doctor/logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');

Route::get('doctor/appointments', [AppointmentController::class, 'index']);
Route::get('doctor/appointments/create', [AppointmentController::class, 'create']);
Route::post('doctor/appointments', [AppointmentController::class, 'store']);

Route::get('doctor/reports', [ReportController::class, 'index']);
Route::get('doctor/reports/create', [ReportController::class, 'create']);
Route::post('doctor/reports', [ReportController::class, 'store']);

Route::get('doctor/availability-slots', [AvailabilitySlotController::class, 'index']);
Route::get('doctor/availability-slots/create', [AvailabilitySlotController::class, 'create']);
Route::post('doctor/availability-slots', [AvailabilitySlotController::class, 'store']);




Route::get('patient/register', [PatientAuthController::class, 'showRegisterForm']);
Route::post('patient/register', [PatientAuthController::class, 'register']);
Route::get('patient/login', [PatientAuthController::class, 'showLoginForm']);
Route::post('patient/login', [PatientAuthController::class, 'login']);
Route::post('patient/logout', [PatientAuthController::class, 'logout'])->name('patient.logout');

Route::get('patient/subscribe', [SubscriptionController::class, 'showSubscriptionForm']);
Route::post('patient/subscribe', [SubscriptionController::class, 'subscribe']);

Route::post('vital-signs', [VitalSignController::class, 'store']);

Route::get('patient/appointments', [AppointmentController::class, 'index']);
Route::get('patient/appointments/create', [AppointmentController::class, 'create']);
Route::post('patient/appointments', [AppointmentController::class, 'store']);


Route::get('patient/medical-record', function () {
    return view('patient.medical_record');
});

Route::get('teleconsultation', function () {
    return view('teleconsultation');
});

Route::get('lobby', function () {
    return view('lobby'); // Assurez-vous de créer une vue pour le lobby
});

Route::get('teleconsultation', [TeleconsultationController::class, 'index']);
Route::get('leave', [TeleconsultationController::class, 'leave']);

