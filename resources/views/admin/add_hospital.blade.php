<!DOCTYPE html>
<html>
<head>
    <title>Add Hospital</title>
</head>
<body>
    <form method="POST" action="{{ url('admin/hospitals') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Address:</label>
        <input type="text" name="address" required>
        <button type="submit">Add Hospital</button>
    </form>
</body>
</html>
