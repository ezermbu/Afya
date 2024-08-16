<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VitalSignController;
use App\Http\Controllers\DoctorAuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientAuthController;
use App\Http\Controllers\HospitalAuthController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\MedicalRecordController;
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

// route du admin
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('admin/hospitals', [HospitalController::class, 'index'])->name('admin.hospitals.index');;
Route::get('admin/hospitals/create', [HospitalController::class, 'create'])->name('admin.hospitals.create');
Route::post('admin/hospitals/store', [HospitalController::class, 'store'])->name('admin.hospitals.store');

Route::get('admin/hospitals/edit/{hospital}', [HospitalController::class, 'edit'])->name('admin.hospitals.edit');
Route::put('admin/hospitals/update/{hospital}', [HospitalController::class, 'update'])->name('admin.hospitals.update');
Route::delete('admin/hospitals/destroy/{hospital}', [HospitalController::class, 'destroy'])->name('admin.hospitals.destroy');

Route::get('admin/dashboard', [AdminDashboardController::class, 'index']);
Route::get('admin/doctors', [DoctorController::class, 'indexAdmin'])->name('admin.doctors.index');
Route::get('admin/doctors/{id}', [DoctorController::class, 'show'])->name('admin.doctors.show');
Route::get('admin/patients/{id}', [PatientController::class, 'show'])->name('admin.patients.show');
Route::get('admin/patients', [PatientController::class, 'indexAdmin'])->name('admin.patients.index');

Route::get('admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/settings', [AdminDashboardController::class, 'settings'])->name('admin.settings');
Route::put('admin/settings', [AdminDashboardController::class, 'updateSettings'])->name('admin.settings.update');





// route du docteur
Route::get('hospital/', [HospitalController::class, 'dashboard'])->name('hospital.dashboard');
Route::get('hospital/dashboard', [HospitalController::class, 'dashboard'])->name('hospital.dashboard');

Route::get('hospital/login', [HospitalAuthController::class, 'showLoginForm'])->name('hospital.login');
Route::post('hospital/login', [HospitalAuthController::class, 'login']);
Route::get('hospital/logout', [HospitalAuthController::class, 'logout'])->name('hospital.logout');

Route::get('hospital/doctors', [DoctorController::class, 'index']);
Route::get('hospital/doctors/create', [DoctorController::class, 'create']);
Route::post('hospital/doctors', [DoctorController::class, 'store']);
Route::get('hospital/doctors/{id}/edit', [DoctorController::class, 'edit']);
Route::put('hospital/doctors/{id}', [DoctorController::class, 'update']);
Route::delete('hospital/doctors/{id}', [DoctorController::class, 'destroy']);

Route::get('hospital/reports', [ReportController::class, 'index']);

Route::get('hospital/patient-reports', [PatientReportController::class, 'index']);




// route du doctor
Route::get('doctor', [DoctorController::class, 'dashboard']);
Route::get('doctor/dashboard', [DoctorController::class, 'dashboard'])->name('doctor.dashboard');
Route::get('doctor/login', [DoctorAuthController::class, 'showLoginForm'])->name('doctor.showLoginForm');
Route::post('doctor/login', [DoctorAuthController::class, 'login'])->name('doctor.login');;
Route::get('doctor/logout', [DoctorAuthController::class, 'logout'])->name('doctor.logout');

Route::get('doctor/appointments', [AppointmentController::class, 'index']);
Route::get('doctor/appointments/create', [AppointmentController::class, 'create']);
Route::post('doctor/appointments', [AppointmentController::class, 'store']);

Route::get('doctor/reports', [ReportController::class, 'index']);
Route::get('doctor/reports/create', [ReportController::class, 'create']);
Route::post('doctor/reports', [ReportController::class, 'store']);

Route::get('doctor/availability-slots', [AvailabilitySlotController::class, 'index']);
Route::get('doctor/availability-slots/create', [AvailabilitySlotController::class, 'create']);
Route::get('doctor/availability-slots', [AvailabilitySlotController::class, 'store']);



// route du patient
Route::get('patient/register', [PatientAuthController::class, 'showLoginForm']);
Route::post('patient/register', [PatientAuthController::class, 'register'])->name('patient.register');;
Route::get('patient/login', [PatientAuthController::class, 'showLoginForm'])->name('patient.showLoginForm');
Route::post('patient/login', [PatientAuthController::class, 'login'])->name('patient.login');
Route::get('patient/logout', [PatientAuthController::class, 'logout'])->name('patient.logout');

// Routes CRUD pour les patients
Route::get('patient/dashboard', [PatientController::class, 'dashboard'])->name('patient.dashboard');
Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
Route::get('patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy');

Route::get('patient/hospitals', [HospitalController::class, 'index'])->name('patient.hospitals.index');
Route::get('patient/subscribe', [SubscriptionController::class, 'showSubscriptionForm']);
Route::post('patient/subscribe', [SubscriptionController::class, 'subscribe']);

Route::post('patient/vital-signs', [VitalSignController::class, 'store']);



Route::get('patient/appointments', [AppointmentController::class, 'index']);
Route::get('patient/appointments/create', [AppointmentController::class, 'create']);
Route::post('patient/appointments', [AppointmentController::class, 'store']);

Route::get('patient/medical-record', [MedicalRecordController::class, 'index'])->name('patient.medical-record.index');
Route::get('patient/teleconsultation', [TeleconsultationController::class, 'index'])->name('patient.teleconsultation.index');


Route::get('teleconsultation', [TeleconsultationController::class, 'index']);
Route::get('leave', [TeleconsultationController::class, 'leave']);

Route::get('patient/settings', [PatientController::class, 'settings'])->name('patient.settings');
