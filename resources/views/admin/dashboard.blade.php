<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1>Bienvenue sur le Tableau de Bord Admin</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('admin/dashboard') }}">Accueil</a></li>
                    <li><a href="{{ url('admin/hospitals') }}">Gérer les Hôpitaux</a></li>
                    <li><a href="{{ url('admin/doctors') }}">Gérer les Médecins</a></li>
                    <li><a href="{{ url('admin/patients') }}">Gérer les Patients</a></li>
                    <li><a href="{{ url('admin/appointments') }}">Gérer les Rendez-vous</a></li>
                    <li><a href="{{ url('admin/users') }}">Gérer les Utilisateurs</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <h2>Statistiques</h2>
                <div class="stats-container">
                    <div class="stat-box">
                        <h3>Nombre total d'hôpitaux</h3>
                        <p>{{ $hospitalCount }}</p>
                    </div>
                    <div class="stat-box">
                        <h3>Nombre total de médecins</h3>
                        <p>{{ $doctorCount }}</p>
                    </div>
                    <div class="stat-box">
                        <h3>Nombre total de patients</h3>
                        <p>{{ $patientCount }}</p>
                    </div>
                    <div class="stat-box">
                        <h3>Rendez-vous aujourd'hui</h3>
                        <p>{{ $todayAppointments }}</p>
                    </div>
                </div>
            </section>

            <section>
                <h2>Actions rapides</h2>
                <div class="quick-actions">
                    <a href="{{ url('admin/hospitals/create') }}" class="btn">Ajouter un hôpital</a>
                    <a href="{{ url('admin/doctors/create') }}" class="btn">Ajouter un médecin</a>
                    <a href="{{ url('admin/appointments/create') }}" class="btn">Créer un rendez-vous</a>
                </div>
            </section>
        </main>

        <footer>
            <p>© {{ date('Y') }} Système de Gestion Hospitalière. Tous droits réservés.</p>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
