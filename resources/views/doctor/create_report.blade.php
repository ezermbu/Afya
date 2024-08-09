<!DOCTYPE html>
<html>
<head>
    <title>Create Report</title>
</head>
<body>
    <form method="POST" action="{{ url('doctor/reports') }}">
        @csrf
        <label>Appointment:</label>
        <select name="appointment_id">
            @foreach($appointments as $appointment)
                <option value="{{ $appointment->id }}">{{ $appointment->scheduled_at }} - Patient ID: {{ $appointment->patient_id }}</option>
            @endforeach
        </select>
        <label>Report:</label>
        <textarea name="report" required></textarea>
        <button type="submit">Submit Report</button>
    </form>
</body>
</html>
