<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hospital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
    <style>
        .add-hospital-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 20px auto;
        }
        .add-hospital-form h2 {
            color: #333;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #45a049;
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
                <a href="{{ route('admin.dashboard') }}">
                    <span class="material-icons-sharp">monitor_heart</span>
                    <h3>Tableau de Bord</h3>
                </a>
                <a href="{{ route('admin.patients.index') }}">
                    <span class="material-symbols-outlined">folder_shared</span>
                    <h3>Patients</h3>
                </a>
                <a href="{{ route('admin.hospitals.index') }}" class="active">
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
            <h1>Add Hospital</h1>
            <div class="add-hospital-form">
                <h2>Ajouter un nouvel hôpital</h2>
                <form method="POST" action="{{ route('admin.hospitals.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse:</label>
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="number">Numéro:</label>
                        <input type="text" id="number" name="number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <button type="submit" class="submit-btn">Ajouter l'hôpital</button>
                </form>
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
