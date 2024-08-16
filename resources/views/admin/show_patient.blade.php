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
                <a href="{{ route('admin.settings') }}">
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
                    <ul>
                        <li><strong>ID:</strong> {{ $patient->id }}</li>
                        <li><strong>Email:</strong> {{ $patient->email }}</li>
                        <li><strong>Date de naissance:</strong> {{ $patient->date_of_birth }}</li>
                        <li><strong>Téléphone:</strong> {{ $patient->phone }}</li>
                        <li><strong>Adresse:</strong> {{ $patient->address }}</li>
                    </ul>
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
                <ul>
                    <li><strong>Groupe sanguin:</strong> {{ $patient->blood_group }}</li>
                    <li><strong>Allergies:</strong> {{ $patient->allergies ?? 'Aucune' }}</li>
                    <li><strong>Maladies chroniques:</strong> {{ $patient->chronic_diseases ?? 'Aucune' }}</li>
                </ul>
            </div>
            <div class="patient-appointments">
                <h3>Rendez-vous</h3>
                <!-- Ajoutez ici la liste des rendez-vous -->
            </div>
        </main>
        
        <div class="right">
            <div class="profile">
                <div class="profile-photo">
                    @if($admin->profile_photo)
                        <img src="{{ asset('images/' . $admin->profile_photo) }}" alt="Photo de profil de {{ $admin->name }}">
                    @else
                        <div class="default-avatar">
                            <span class="material-icons-sharp">account_circle</span>
                        </div>
                    @endif
                </div>
                <div class="info">
                    <h2>{{ $admin->name }}</h2>
                    <p>{{ $admin->name ?? 'Admin' }}</p>
                    <small class="text-muted">{{ $admin->description ?? 'Administrateur du système de santé en ligne' }}</small>
                </div>
            </div>
            <div class="profile-actions">
                <a href="{{ route('admin.settings') }}" class="btn-primary">Modifier le profil</a>
            </div>
            <hr class="profile-divider" style="border-top: 1px solid #ccc; margin: 15px 0;">
        </div>
    </div>
    <script src="{{ asset('js/dash_medcin.js') }}"></script>
</body>
</html>
