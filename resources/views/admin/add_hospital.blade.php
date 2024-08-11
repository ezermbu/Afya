<!DOCTYPE html>
<html>
<head>
    <title>Add Hospital</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.hospitals.store') }}">
        @csrf
        <label>Nom:</label>
        <input type="text" name="name" required>
        <label>Adresse:</label>
        <input type="text" name="address" required>
        <label>Numéro:</label>
        <input type="text" name="number" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Add Hospital</button>
    </form>
</body>
</html>
