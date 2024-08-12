<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-client</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="{{ asset('css/dashboard_client.css') }}">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ asset('images/Logo Afya.png') }}" alt="">
                    <h2>Afya <span class="danger">Medical</span></h2>
                </div>
                <div class="close" id="close-btn">
                      <span class="material-icons-sharp">close</span>
                </div>
            </div>
            
            <div class="sidebar">
                <a href="{{ route('patient.dashboard') }}">
                    <span class="material-icons-sharp">home</span>
                    <h3>Accueil</h3>
                </a>
                <a href="{{ route('patient.dashboard') }}" class="active">
                    <span class="material-icons-sharp">monitor_heart</span>
                    <h3>Prélèvement</h3>
                </a>
                <a href="{{ route('patient.medical-record.index') }}">
                    <span class="material-icons-sharp">folder_open</span>
                    <h3>Mon dossier</h3>
                </a>
                <a href="{{ route('patient.teleconsultation.index') }}">
                    <span class="material-icons-sharp">video_call</span>
                    <h3>Téléconsultation</h3>
                    <span class="message-count">12</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">call</span>
                    <h3>Contacts</h3>
                </a>
                <a href="{{ route('patient.settings') }}">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Paramètres</h3>
                </a>
                <a href="{{ route('patient.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
                <form id="logout-form" action="{{ route('patient.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>
        
        <main>
            <h1>Dashboard Patient</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="rythmec">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Rythme Cardiaque</h3>
                            <h1 id="rythmec">-- Bpm</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="rythmec-percentage">--%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>

                <div class="tempc">
                    <span class="material-icons-sharp">device_thermostat</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Temperature Corporelle</h3>
                            <h1 id="tempc">-- C</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="tempc-value">--</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>

                <div class="freqr">
                    <span class="material-symbols-outlined">health_metrics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Frequence Respiratoire</h3>
                            <h1 id="freqr">-- Cpm</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="freqr-value">--</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>

                <div class="pressionp">
                    <span class="material-symbols-outlined">respiratory_rate</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pression Arterielle</h3>
                            <h1 id="pressionp">-- Pa</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="pressionp-value">--</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>

                <div class="satuo">
                    <span class="material-symbols-outlined">glucose</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Saturation en Oxygène</h3>
                            <h1 id="satuo">-- Spo</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="satuo-value">--</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>

                <div class="tempa">
                    <span class="material-symbols-outlined">clear_day</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Temperature Ambiante</h3>
                            <h1 id="tempa">-- C</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='36' cy='36' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p id="tempa-value">--</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Il y'a 10 Minutes</small>
                </div>
            </div>
        
            <div class="recent-result">
                <h2>Résultats récents</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date et heure</th>
                            <th>Rythme C</th>
                            <th>Temperature C</th>
                            <th>Frequence R</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <a href="#">Tout voir</a>
            </div>
        </main>
    
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>{{ $patient->name }}</b></p>
                        <small class="text-muted">Patient</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{ asset('images/docteur-francois.avif') }}" alt="">
                    </div>
                </div>
            </div>
        
            <div class="recent-updates">
                <h2>Annonces</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="{{ asset('images/docteur-martin.jpeg') }}" alt="">
                        </div>
                        <div class="message">
                            <p><b>Martin Mpoyi</b> nouveau medecin de l'hopital HJ</p>
                            <small class="text-muted">Il y'a 1 jour</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="{{ asset('images/docteur-ulrich.jpeg') }}" alt="">
                        </div>
                        <div class="message">
                            <p><b>Martin Mpoyi</b> nouveau medecin de l'hopital HJ</p>
                            <small class="text-muted">Il y'a 1 jour</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="{{ asset('images/docteur-francois.avif') }}" alt="">
                        </div>
                        <div class="message">
                            <p><b>Martin Mpoyi</b> nouveau medecin de l'hopital HJ</p>
                            <small class="text-muted">Il y'a 1 jour</small>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="medecin-analytics">
                <h2>Analyse du medecin</h2>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined">clinical_notes</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Ordre de résultat</h3>
                            <small class="text-muted">Il y'a 2 heures</small>
                        </div>
                        <div class="success">79%</div>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">clinical_notes</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Ordre de résultat</h3>
                            <small class="text-muted">Il y'a 12 heures</small>
                        </div>
                        <div class="danger">79%</div>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined">clinical_notes</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Ordre de résultat</h3>
                            <small class="text-muted">Il y'a 24 heures</small>
                        </div>
                        <div class="success">79%</div>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-icons-sharp">add</span>
                        <h3>Ajouter mon analyse</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/dash_client.js') }}"></script>
</body>
</html>