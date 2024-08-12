<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Afya</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="Logo Afya">
            </div>
            <nav>
                <a href="#">Accueil</a>
                <a href="#">A propos</a>
                <a href="#">Équipe</a>
                <a href="#">Contact</a>
                <a href="#">FAQ</a>
                <a href="{{ route('patient.login') }}" class="login-button">Connexion</a>                
                <a href="{{ route('patient.register') }}" class="create-account-button">Créer un compte</a>            </nav>
        </div>
    </header>

    <div class="contenu-principal">
        <h1>Afya Médicale</h1>
        <h2>Pour une RDC où les soins médicaux sont <br> accessibles à tous.</h2>
        <p>Faites-vous consulter en ligne par un professionnel de santé</p>

        <div class="formulaire-recherche">
            <form action="#">
                <select id="specialite" name="specialite" class="specialite-liste">
                    <option value="">Sélectionner une spécialité</option>
                    <option value="cardiologue">Généraliste</option>
                    <option value="cardiologue">Cardiologue</option>
                    <option value="dentiste">Dentiste</option>
                    <option value="cardiologue">Dermatologue</option>
                    <option value="cardiologue">Ophtamologue</option>
                </select>
                <select id="hopital" name="hopital" class="hopital-liste">
                    <option value="">Sélectionner un établissement</option>
                    <option value="hopital_central">Diamant</option>
                    <option value="clinique_moderne">HJ Hospital</option>
                    <option value="hopital_central">Clinique Ngaliema</option>
                    <option value="hopital_central">Biamba Marie Mutombo</option>
                    <option value="hopital_central">Clinique Bondeko</option>
                    <option value="hopital_central">Maman Yemo</option>
                </select>
                <button type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
        </div>
    </div>

    <div class="trois-blocs">
        <div class="bloc">
            <i class="material-icons">local_hospital</i>
            <h3>Trouver un hôpital</h3>
            <p>Créer une fiche médicale au sein d'un hôpital, Centre ou Clinique.</p>
            <br><br>
            <a href="#">Commencer</a>
        </div>
        <div class="bloc">
            <i class="material-icons">assignment</i>
            <h3>Prendre rendez-vous</h3>
            <p>Obtenez une consultation médicale en ligne instantanée et sans rendez-vous </p>
            <br><br>
            <a href="login.html">Téléconsultation</a>
        </div>
        <div class="bloc">
            <i class="material-icons">infos</i>
            <h3>C'est quoi Afya ?</h3>
            <p>Découvrez toutes les informations concernant les produits Afya et apprenez comment les utiliser.</p>
            <br>
            <a href="#">Découvrir</a>
        </div>
    </div>

    <div class="services">
        <div class="services-listes-1">
            <div class="texte-1">
                <h2>S'abonner dans l'établissement hospitalier de votre choix</h2>
                <p>Créez facilement votre dossier médical personnalisé dans l'établissement hospitalier de votre choix grâce à notre application de téléconsultation.</p>
                <p>Profitez d'un accès sécurisé à vos informations médicales lors de vos consultations virtuelles, améliorant ainsi la qualité des soins et la communication avec votre équipe médicale.</p>
                <a href="liste_hopital.html">Voir les hôpitaux</a>
            </div>
            <div class="image-1">
                <img src="images/Hopital.png" alt="Illustration d'un bâtiment d'hôpital avec des personnes qui marchent autour">
            </div>
        </div>

        <div class="services-listes-2">
            <div class="texte-2">
                <h2>Planifiez des consultations avec vos professionnels de santé en toute simplicité</h2>
                <p>Simplifiez vos démarches en réservant en ligne (sans vous déplacer), choisissez votre date et votre heure, et recevez les soins dont vous avez besoin en toute simplicité</p>
                <p>Gagnez du temps et prenez le contrôle de votre santé dès maintenant</p>
                <a href="login.html">Prendre un rendez-vous</a>
            </div>
            <div class="image-2">
                <img src="images/Consultation.jpg" alt="Illustration d'un bâtiment d'hôpital avec des personnes qui marchent autour">
            </div>
        </div>

        <div class="services-listes-1">
            <div class="texte-1">
                <h2>Obtenez des prescriptions médicales pour vos médicaments à la suite d'une consultation</h2>
                <p>Après votre consultation en ligne avec les médecins de votre hôpital affilié, vous recevrez une prescription médicale adaptée à votre condition.</p>
                <p>Faites confiance à leur expertise pour obtenir les médicaments nécessaires à votre traitement en toute sécurité.</p>
                <a href="#">En savoir plus</a>
            </div>
            <div class="image-1">
                <img src="images/Medicaments.png" alt="Illustration d'un bâtiment d'hôpital avec des personnes qui marchent autour">
            </div>
        </div>

        <div class="services-listes-2">
            <div class="texte-2">
                <h2>Bénéficiez de l'assistance d'un assistant médical intelligent pour effectuer des prélèvements en temps réel de vos signaux vitaux</h2>
                <p>Profitez de l'accompagnement précieux d'un assistant médical intelligent à domicile, équipé de capteurs avancés qui collectent et transmettent en temps réel vos signaux vitaux aux médecins</p>
                <p>Grâce à cette technologie de pointe et à l'intelligence artificielle intégrée, votre assistant médical assure une surveillance continue de votre état de santé, permettant ainsi une prise en charge proactive et personnalisée</p>
                <a href="transition-prelevement.html">Effectuer un prélèvement</a>
            </div>
            <div class="image-2">
                <img src="images/robot.png" alt="Illustration d'un bâtiment d'hôpital avec des personnes qui marchent autour">
            </div>
        </div>

        <div class="services-listes-1">
            <div class="texte-1">
                <h2>Gardez vos documents de santé à portée de main en tout temps</h2>
                <p>Dites adieu aux dossiers sur papier, aux pertes de documents et aux piles de fiches médicales. Grâce à notre solution numérique, vos documents de santé sont toujours accessibles, où que vous soyez.</p>
                <p>Centralisez et organisez vos informations médicales en toute sécurité, avec la garantie de les avoir à portée de main lorsque vous en avez besoin. Simplifiez votre vie et bénéficiez d'un accès instantané à vos dossiers médicaux, pour une meilleure coordination des soins et une tranquillité d'esprit totale.</p>
                <a href="#">Voir mon dossier</a>
            </div>
            <div class="image-1">
                <img src="images/document.png" alt="Illustration d'un bâtiment d'hôpital avec des personnes qui marchent autour">
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-avant">
            <div class="texte-gauche">
                <h2>Disponible et accessible à tous</h2>
                <p>Sois au contrôle de ta santé et évite les surprises désagréables</p>
                <br>
                <a href="#">Commencer maintenant</a>
            </div>
            <div class="texte-droite">
                <h2>Heure d'ouverture</h2>
                <p>24H/24</p>
                <h2>7/7J</h2>
                <p>Contact : +243 81 16 45 466</p>
            </div>
        </div>
        <br>
        <div class="footer-apres">
            <p>@ 2024 Tout droits Réservés. Powered by DigitalTeam exclusivement à  Michael MIEMA</p>
        </div>
    </footer>

    <script src="js/script.js" async></script>
</body>
</html>
