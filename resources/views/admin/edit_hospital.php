<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer l'hôpital</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    <div class="container">
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
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
