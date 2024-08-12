<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">    <title>SignIn - Login</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form method="POST" action="{{ url('patient/login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Connexion</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </div>
                <input type="submit" value="Se connecter" class="btn">
                <p class="social-text">Vous connectez via votre compte</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <br>
                <p class="account-text">Vous n'avez pas un compte ? <a href="#" id="sign-up-btn2">S'incrire</a></p>
            </form>
            
            <form action="{{ url('patient/register') }}" class="sign-up-form">
                <h2 class="title">Inscription</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="nom d'utilisateur">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="mot de passe">
                </div>
                <input type="submit" value="S'inscrire" class="btn">
                <p class="social-text">Vous connectez via votre compte</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <br>
                <p class="account-text">Vous avez pas un compte ? <a href="#" id="sign-in-btn2">S'inscrire</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Vous avez un compte ?</h3>
                    <p>Connectez-vous facilement pour accéder à votre espace personnel, 
                        prendre rendez-vous avec votre médecin et suivre vos consultations en ligne.
                    </p>
                    <button class="btn" id="sign-in-btn">Se connecter</button>
                    <img src="images/undraw_medicine_b-1-ol.svg" alt="" class="image">
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Nouveau membre ?</h3>
                    <p>Rejoignez notre communauté de patients et de professionnels 
                        de santé pour bénéficier d'un suivi médical à distance, simple et sécurisé.
                        Accédez à vos consultations en quelques clics depuis votre ordinateur, 
                        votre tablette ou votre smartphone
                    </p>
                    <button class="btn" id="sign-up-btn">S'inscrire</button>
                    <img src="images/undraw_doctors_p6aq.svg" alt="" class="image">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script></body>
</html>
