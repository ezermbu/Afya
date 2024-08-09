<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
</head>
<body>
    <form method="POST" action="{{ url('hospital/doctors') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Specialty:</label>
        <input type="text" name="specialty" required>
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
        <button type="submit">Add Doctor</button>
    </form>
</body>
</html>
