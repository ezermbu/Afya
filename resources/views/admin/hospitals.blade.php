<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Hôpitaux</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
    <style>
        main {
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        main h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        
        .date input[type="date"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 250px;
        }
        
        .insights {
            margin-top: 20px;
        }
        
        .insights h1 {
            font-size: 20px;
            color: #555;
            margin-bottom: 15px;
        }
        
        .table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 1px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .table thead {
            background-color: #f9f9f9;
            color: #333;
            text-align: left;
            font-size: 16px;
            border-bottom: 2px solid #ddd;
        }
        
        .table th, .table td {
            padding: 12px 15px;
        }
        
        .table tbody tr {
            border-bottom: 1px solid #eee;
        }
        
        .table tbody tr:last-of-type {
            border-bottom: none;
        }
        
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        
        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        
        .btn-info {
            background-color: #17a2b8;
        }
        
        .btn-info:hover {
            background-color: #138496;
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
            <h1>Liste des Hôpitaux</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <a href="{{ route('admin.hospitals.create') }}" class="btn btn-primary mb-3">Ajouter un hôpital</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($hospitals->isEmpty())
                    <div class="alert alert-info">
                        Aucun hôpital n'est enregistré pour le moment.
                    </div>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hospitals as $hospital)
                                <tr>
                                    <td>{{ $hospital->name }}</td>
                                    <td>{{ $hospital->address }}</td>
                                    <td>{{ $hospital->email }}</td>
                                    <td>
                                        <a href="{{ route('admin.hospitals.edit', $hospital->id) }}" class="btn btn-info btn-sm">Modifier</a>
                                        <form action="{{ route('admin.hospitals.destroy', $hospital->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet hôpital ?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
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
        </div>
    </div>
    <script src="{{ asset('js/dash_medcin.js') }}"></script>
</body>
</html>
