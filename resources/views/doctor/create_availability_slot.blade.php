<!DOCTYPE html>
<html>
<head>
    <title>Create Availability Slot</title>
</head>
<body>
    <form method="POST" action="{{ url('doctor/availability-slots') }}">
        @csrf
        <label>Start Time:</label>
        <input type="datetime-local" name="start_time" required>
        <label>End Time:</label>
        <input type="datetime-local" name="end_time" required>
        <button type="submit">Add Slot</button>
    </form>
</body>
</html>
