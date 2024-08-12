<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Docteur</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 900px;
            max-width: 100%;
            min-height: 550px;
            display: flex;
        }
        
        .form-container {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .image-container {
            flex: 1;
            background: linear-gradient(45deg, #4e73df, #224abe);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            padding: 40px;
        }
        
        h1 {
            font-weight: 700;
            color: #333;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            font-weight: 600;
            color: #555;
            margin-bottom: 8px;
        }
        
        .form-control {
            border: 2px solid #e1e1e1;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #4e73df;
            box-shadow: none;
        }
        
        .btn-primary {
            background-color: #4e73df;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #224abe;
        }
        
        .alert {
            border-radius: 8px;
        }
        
        .social-login {
            margin-top: 30px;
            text-align: center;
        }
        
        .social-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f1f1f1;
            color: #333;
            font-size: 18px;
            line-height: 40px;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: #4e73df;
            color: #fff;
        }
        
        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="text-center mb-1">
                <img src="{{ asset('images/Logo Afya.png') }}" alt="Afya Logo" class="img-fluid" style="max-width: 80px;">
            </div>
            
            <h1 class="text-center">Connexion Docteur</h1>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form method="POST" action="{{ route('doctor.login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Adresse e-mail</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-control @error('email') is-invalid @enderror">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" id="password" name="password" required class="form-control @error('password') is-invalid @enderror">
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </form>
            
            <div class="social-login">
                <p>Ou connectez-vous avec</p>
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
            </div>
            
            <footer>
                <p>© 2024 Afya. Tous droits réservés.</p>
            </footer>
        </div>
        <div class="image-container">
            <div>
                <h2>Bienvenue sur l'interface docteur</h2>
                <p>Cette zone est réservée aux docteurs autorisés du site. En tant que docteur, vous aurez accès à des fonctionnalités spécifiques pour gérer vos patients et vos rendez-vous.</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
