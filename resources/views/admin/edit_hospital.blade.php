<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer l'hôpital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_admin.css') }}">
    <style>
        .container {
            display: flex;
        }
        aside {
            flex: 1;
        }
        main {
            flex: 3;
            padding: 20px;
        }
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
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
        }
        .sidebar a.active {
            background-color: #e0e0e0;
        }
        .sidebar .material-icons-sharp,
        .sidebar .material-symbols-outlined {
            margin-right: 10px;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="tel"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        button[type="submit"]:hover {
            background-color: #45a049;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
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
            <h1>Éditer l'hôpital</h1>
            <form action="{{ route('admin.hospitals.update', $hospital->id) }}" method="POST">            
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nom de l'hôpital:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($hospital['name'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label for="address">Adresse:</label>
                    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($hospital['address'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone:</label>
                    <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($hospital['phone'] ?? ''); ?>" >
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($hospital['email'] ?? ''); ?>">
                </div>
                <button type="submit">Mettre à jour</button>
            </form>
        </main>
    </div>
</body>
</html>
