<!DOCTYPE html>
<html>
<head>
    <title>Schedule Appointment</title>
</head>
<body>
    <form method="POST" action="{{ url('doctor/appointments') }}">
        @csrf
        <label>Doctor:</label>
        <select name="doctor_id">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
            @endforeach
        </select>
        <label>Patient:</label>
        <select name="patient_id">
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
            @endforeach
        </select>
        <label>Scheduled At:</label>
        <input type="datetime-local" name="scheduled_at" required>
        <button type="submit">Schedule</button>
    </form>
</body>
</html>
