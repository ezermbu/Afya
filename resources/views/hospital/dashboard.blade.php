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
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="images/Logo Afya.png" alt="">
                    <h2>Afya <span class="danger">Medical</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            
            <div class="sidebar">
                <a href="index.html">
                    <span class="material-icons-sharp">home</span>
                    <h3>Accueil</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">format_list_bulleted</span>
                    <h3>Liste des Patients</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <h3>Agenda</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">notifications</span>
                    <h3>Notifications</h3>
                    <span class="message-count">12</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Paramètres</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        
        <main>
            <h1>Dashboard Médecin</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="patients">
                    <span class="material-icons-sharp">personal_injury</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Patients</h3>
                            <h1>150</h1>
                        </div>
                    </div>
                    <small class="text-muted">Ce mois-ci</small>
                </div>
                
                <div class="consultations">
                    <span class="material-symbols-outlined">stethoscope_check</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Consultations</h3>
                            <h1>75</h1>
                        </div>
                    </div>
                    <small class="text-muted">Cette semaine</small>
                </div>
                
                <div class="prescriptions">
                    <span class="material-symbols-outlined">medication</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Prescriptions</h3>
                            <h1>50</h1>
                        </div>
                    </div>
                    <small class="text-muted">Cette semaine</small>
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
                        <tr>
                            <td>Jean Dupont</td>
                            <td>15/05/2023</td>
                            <td>Traitement en cours</td>
                        </tr>
                        <tr>
                            <td>Marie Martin</td>
                            <td>18/05/2023</td>
                            <td>En attente de résultats</td>
                        </tr>
                        <tr>
                            <td>Pierre Durand</td>
                            <td>20/05/2023</td>
                            <td>Suivi terminé</td>
                        </tr>
                    </tbody>
                </table>
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
                        <p><b>Dr. Sarah Johnson</b></p>
                        <small class="text-muted">Médecin généraliste</small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/doctor-profile.jpg" alt="">
                    </div>
                </div>
            </div>
            
            <div class="recent-updates">
                <h2>Rendez-vous à venir</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/patient1.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Luc Dubois</b> - Consultation de suivi</p>
                            <small class="text-muted">Aujourd'hui à 14:30</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/patient2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Sophie Lefebvre</b> - Première consultation</p>
                            <small class="text-muted">Demain à 10:00</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="images/patient3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Marc Tremblay</b> - Résultats d'examens</p>
                            <small class="text-muted">Après-demain à 11:15</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="analytics">
                <h2>Statistiques</h2>
                <div class="item">
                    <div class="icon">
                        <span class="material-icons-sharp">bar_chart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Taux de satisfaction</h3>
                            <small class="text-muted">Derniers 30 jours</small>
                        </div>
                        <h5 class="success">+95%</h5>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <span class="material-icons-sharp">psychology</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Diagnostics précis</h3>
                            <small class="text-muted">Derniers 30 jours</small>
                        </div>
                        <h5 class="success">+92%</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dash_medecin.js') }}"></script>
</body>
</html>
