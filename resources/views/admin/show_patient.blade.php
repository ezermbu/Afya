<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Patient - Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ asset('images/Logo Afya.png') }}" alt="Afya logo">
                    <h2>Afya <span class="danger">Medical</span></h2>
                </div>
            </div>
            
            <div class="sidebar">
                <hr>
                <a href="{{ route('admin.dashboard') }}">
                    <span class="material-icons-sharp">monitor_heart</span>
                    <h3>Tableau de Bord</h3>
                </a>
                <a href="{{ route('admin.patients.index') }}" class="active">
                    <span class="material-symbols-outlined">folder_shared</span>
                    <h3>Patients</h3>
                </a>
                <a href="{{ route('admin.hospitals.index') }}">
                    <span class="material-symbols-outlined">emergency</span>
                    <h3>Hôpital</h3>
                </a>
                <a href="{{ route('admin.doctors.index') }}">
                    <span class="material-symbols-outlined">stethoscope</span>
                    <h3>Médecin</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Paramètres</h3>
                </a>
                <a href="{{ route('admin.logout') }}">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        
        <main>
            <h1>Profil du Patient</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="patient-profile">
                <div class="patient-info">
                    <h2>{{ $patient->name }}</h2>
                    <p>ID: {{ $patient->id }}</p>
                    <p>Email: {{ $patient->email }}</p>
                    <p>Date de naissance: {{ $patient->date_of_birth }}</p>
                    <p>Téléphone: {{ $patient->phone }}</p>
                    <p>Adresse: {{ $patient->address }}</p>
                </div>
                <div class="patient-photo">
                    @if($patient->profile_photo)
                        <img src="{{ asset('storage/' . $patient->profile_photo) }}" alt="Photo de {{ $patient->name }}">
                    @else
                        <div class="default-avatar">
                            <span class="material-icons-sharp">account_circle</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="patient-medical-info">
                <h3>Informations Médicales</h3>
                <p>Groupe sanguin: {{ $patient->blood_group }}</p>
                <p>Allergies: {{ $patient->allergies ?? 'Aucune' }}</p>
                <p>Maladies chroniques: {{ $patient->chronic_diseases ?? 'Aucune' }}</p>
            </div>
            <div class="patient-appointments">
                <h3>Rendez-vous</h3>
                
            </div>
        </main>
        
        <div class="right">
            <div class="profile">
                <div class="info">
                    <h2>{{ $admin->name }}</h2>
                    <p>{{ $admin->name ?? 'Admin' }}</p>
                    <small class="text-muted">{{ $admin->description ?? 'Administrateur du système de santé en ligne' }}</small>
               </div>
                <div class="profile-photo">
                    @if($admin->profile_photo)
                        <img src="{{ asset('storage/' . $admin->profile_photo) }}" alt="Photo de profil de {{ $admin->name }}" class="rounded-circle">
                    @else
                        <div class="default-avatar">
                            <span class="material-icons-sharp">account_circle</span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="profile-actions">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Modifier le profil</a>
            </div>
            <hr class="profile-divider" style="border-top: 1px solid #ccc; margin: 15px 0;">
        </div>
    </div>
    <script src="{{ asset('js/dash_medcin.js') }}"></script>
</body>
</html>
