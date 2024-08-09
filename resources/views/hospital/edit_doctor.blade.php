<!DOCTYPE html>
<html>
<head>
    <title>Edit Doctor</title>
</head>
<body>
    <form method="POST" action="{{ url('hospital/doctors/' . $doctor->id) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $doctor->name }}" required>
        <label>Specialty:</label>
        <input type="text" name="specialty" value="{{ $doctor->specialty }}" required>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $doctor->email }}" required>
        <label>Password:</label>
        <input type="password" name="password">
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation">
        <button type="submit">Update Doctor</button>
    </form>
</body>
</html>
