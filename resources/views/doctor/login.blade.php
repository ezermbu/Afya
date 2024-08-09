<!DOCTYPE html>
<html>
<head>
    <title>Doctor Login</title>
</head>
<body>
    <form method="POST" action="{{ route('doctor.login') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
