<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Docteurs</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            display: flex;
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        aside {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            margin-right: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 50px;
            margin-right: 10px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            padding: 10px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .sidebar .material-icons-sharp, .sidebar .material-symbols-outlined {
            margin-right: 10px;
        }

        main {
            flex-grow: 1;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .add-doctor-btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            margin-bottom: 20px;
        }

        .add-doctor-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .add-doctor-btn .material-icons-sharp {
            margin-right: 10px;
            font-size: 24px;
        }

        .recent-orders {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #2c3e50;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .btn-info {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-info:hover {
            background-color: #2980b9;
        }

        .right {
            width: 300px;
            margin-left: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-photo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .default-avatar {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e0e0e0;
            color: #757575;
        }

        .info h2 {
            margin: 0;
            font-size: 18px;
            color: #2c3e50;
        }

        .info p, .info small {
            margin: 5px 0;
            color: #7f8c8d;
        }

        .profile-actions {
            margin-top: 20px;
        }

        .profile-actions .btn-primary {
            background-color: #3498db;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .profile-actions .btn-primary:hover {
            background-color: #2980b9;
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
                <a href="{{ route('admin.hospitals.index') }}">
                    <span class="material-symbols-outlined">emergency</span>
                    <h3>Hôpital</h3>
                </a>
                <a href="{{ route('admin.doctors.index') }}" class="active">
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
            <h1>Liste des Docteurs</h1>
            <a href="{{ route('admin.doctors.index') }}" class="add-doctor-btn">
                <span class="material-icons-sharp">add</span>
                <span class="btn-text">Ajouter un médecin</span>
            </a>
            <div class="recent-orders">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Spécialité</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                        <tr>
                            <td>{{ $doctor->id }}</td>
                            <td>{{ $doctor->name }}</td>
                            <td>{{ $doctor->specialty }}</td>
                            <td>{{ $doctor->email }}</td>
                            <td>
                                <a href="#" class="btn-info">Voir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

        <div class="right">
            <div class="profile">
                <div class="profile-photo">
                    @if($admin->profile_photo)
                        <img src="{{ asset('storage/' . $admin->profile_photo) }}" alt="Photo de profil de {{ $admin->name }}">
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
                <a href="{{ route('admin.dashboard') }}" class="btn-primary">Modifier le profil</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/dash_medcin.js') }}"></script>
</body>
</html>
