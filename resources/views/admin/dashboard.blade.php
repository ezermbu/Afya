<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
    <style>
        .add-hospital-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .add-hospital-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .add-hospital-btn .material-icons-sharp {
            margin-right: 10px;
            font-size: 24px;
        }

        .add-hospital-btn .btn-text {
            font-family: 'Montserrat', sans-serif;
        }
    </style> 
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
                <a href="{{ route('admin.dashboard') }}" class="active">
                    <span class="material-icons-sharp">monitor_heart</span>
                    <h3>Tableau de Bord</h3>
                </a>
                <a href="{{ route('admin.patients.index') }}">
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
            <h1>Dashboard Admin</h1>
            <a href="{{ route('admin.hospitals.create') }}" class="btn btn-primary add-hospital-btn">
                <span class="material-icons-sharp">add</span>
                <span class="btn-text">Ajouter un hôpital</span>
            </a>

            <br><br><br>
           <div class="insights">
                <div class="patient-count">
                    <span class="material-icons-sharp">people</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Nombre de Patients</h3>
                            <h1>{{ $patientCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
                <div class="consultations">
                    <span class="material-icons-sharp">video_call</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Téléconsultations</h3>
                            <h1>0</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
                <div class="appointments">
                    <span class="material-icons-sharp">calendar_today</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Rendez-vous</h3>
                            <h1>{{ $appointmentCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
            </div>
            <div class="insights">
                <div class="patient-count">
                    <span class="material-icons-sharp">medical_services</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Médecins</h3>
                            <h1>{{ $doctorCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
                <div class="consultations">
                    <span class="material-icons-sharp">video_call</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Hopitaux</h3>
                            <h1>{{ $hospitalCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
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
