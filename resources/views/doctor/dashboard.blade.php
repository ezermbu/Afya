<!-- resources/views/doctor/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Médecin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_medecin.css') }}">
</head>
<body>
    <div class="container">
        <aside>
            <!-- Code de la barre latérale -->
        </aside>

        <main>
            <h1>Dashboard Médecin</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="rythmec">
                    <span class="material-icons-sharp">personal_injury</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Patients</h3>
                            <h1>{{ $patientCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Traités</small>
                </div>

                <div class="tempc">
                    <span class="material-icons-sharp">video_call</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Consultations</h3>
                            <h1>{{ $consultationCount }}</h1>
                        </div>
                    </div>  
                    <small class="text-muted">Effectuées</small>
                </div>

                <div class="freqr">
                    <span class="material-symbols-outlined">lab_profile</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Rapports</h3>
                            <h1>{{ $reportCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">En cours</small>
                </div>

                <div class="doctorCount">
                    <span class="material-icons-sharp">medical_services</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Médecins</h3>
                            <h1>{{ $doctorCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>

                <div class="doctorCount">
                    <span class="material-icons-sharp">medical_services</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Médecins</h3>
                            <h1>{{ $doctorCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Total</small>
                </div>

                <div class="pressionp">
                    <span class="material-symbols-outlined">search_insights</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Référence</h3>
                            <h1>{{ $referenceCount }}</h1>
                        </div>
                    </div>
                    <small class="text-muted">Voir</small>
                </div>
            </div>

            <div class="recent-result">
                <h2>Patients Consultés</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date et heure</th>
                            <th>Nom complet</th>
                            <th>Description symptômes</th>
                            <th>Résultat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentConsultations as $consultation)
                            <tr>
                                <td>{{ $consultation->scheduled_at }}</td>
                                <td>{{ $consultation->patient->name }}</td>
                                <td>{{ $consultation->description }}</td>
                                <td>{{ $consultation->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="#">Tout voir</a>
            </div>
        </main>

        <div class="right">
            <div class="top">
                <!-- Profil du médecin -->
                <div class="profile">
                    <div class="info">
                        <p> Dr. <b>{{ $doctor->name }}</b></p>
                        <small class="text-muted">{{ $doctor->specialty }}</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{ asset('images/docteur-francois.avif') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="recent-updates">
                <h2>Annonces</h2>
                <div class="updates">
                    @foreach ($announcements as $announcement)
                        <div class="update">
                            <div class="profile-photo">
                                <img src="{{ asset('images/' . $announcement->photo) }}" alt="">
                            </div>
                            <div class="message">
                                <p><b>{{ $announcement->name }}</b> {{ $announcement->message }}</p>
                                <small class="text-muted">Il y'a {{ $announcement->time }}</small>
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
