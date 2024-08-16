<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Médecin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('/css/dashboard_medecin.css') }}">
    <style>
        .add-patient-btn {
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

        .add-patient-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .add-patient-btn .material-icons-sharp {
            margin-right: 10px;
            font-size: 24px;
        }

        .add-patient-btn .btn-text {
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
                <a href="{{ route('doctor.dashboard') }}" class="active">
                    <span class="material-icons-sharp">monitor_heart</span>
                    <h3>Tableau de Bord</h3>
                </a>
                <a href="{{ route('doctor.patients.index') }}">
                    <span class="material-symbols-outlined">format_list_bulleted</span>
                    <h3>Liste des Patients</h3>
                </a>
                <a href="{{ route('doctor.appointments') }}">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <h3>Agenda</h3>
                </a>
                <a href="{{ route('doctor.notifications') }}">
                    <span class="material-icons-sharp">notifications</span>
                    <h3>Notifications</h3>
                    <span class="message-count">12</span>
                </a>
                <a href="{{ route('doctor.settings') }}">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Paramètres</h3>
                </a>
                <a href="{{ route('doctor.logout') }}">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        
        <main>
            <h1>Dashboard Médecin</h1>
            <a href="{{ route('doctor.patients.create') }}" class="btn btn-primary add-patient-btn">
                <span class="material-icons-sharp">add</span>
                <span class="btn-text">Ajouter un patient</span>
            </a>

            <br><br><br>
            <div class="insights">
                <div class="patients">
                    <span class="material-icons-sharp">personal_injury</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Patients</h3>
                            <h1>{{ $patientCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
                
                <div class="consultations">
                    <span class="material-symbols-outlined">stethoscope_check</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Consultations</h3>
                            <h1>{{ $consultationCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
                
                <div class="prescriptions">
                    <span class="material-symbols-outlined">medication</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Prescriptions</h3>
                            <h1>{{ $prescriptionCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>
            </div>
            
            <div class="recent-patients">
                <h2>Patients récents</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Date de consultation</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentPatients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->consultation_date }}</td>
                            <td>{{ $patient->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        
        <div class="right">
            <div class="profile">
                <div class="profile-photo">
                    @if($doctor->profile_photo)
                        <img src="{{ asset('images/' . $doctor->profile_photo) }}" alt="Photo de profil du Dr. {{ $doctor->name }}">
                    @else
                        <div class="default-avatar">
                            <span class="material-icons-sharp">account_circle</span>
                        </div>
                    @endif
                </div>
                <div class="info">
                    <h2>Dr. {{ $doctor->name }}</h2>
                    <small class="text-muted">{{ $doctor->specialty }}</small>
                </div>
            </div>
            <div class="profile-actions">
                <a href="{{ route('doctor.settings') }}" class="btn-primary">Modifier le profil</a>
            </div>
            <hr class="profile-divider" style="border-top: 1px solid #ccc; margin: 15px 0;">
            
            <div class="recent-updates">
                <h2>Rendez-vous à venir</h2>
                <div class="updates">
                    @foreach($upcomingAppointments as $appointment)
                    <div class="update">
                        <div class="profile-photo">
                            @if($appointment->patient->profile_photo)
                                <img src="{{ asset('images/' . $appointment->patient->profile_photo) }}" alt="">
                            @else
                                <div class="default-avatar">
                                    <span class="material-icons-sharp">account_circle</span>
                                </div>
                            @endif
                        </div>
                        <div class="message">
                            <p><b>{{ $appointment->patient->name }}</b> - {{ $appointment->type }}</p>
                            <small class="text-muted">{{ $appointment->date_time }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dash_medecin.js') }}"></script>
</body>
</html>
