<!DOCTYPE html>
<html>
<head>
    <title>Schedule Appointment</title>
</head>
<body>
    <form method="POST" action="{{ url('patient/appointments') }}">
        @csrf
        <label>Select Slot:</label>
        <select name="slot_id">
            @foreach($slots as $slot)
                <option value="{{ $slot->id }}">{{ $slot->start_time }} - {{ $slot->end_time }} (Doctor ID: {{ $slot->doctor_id }})</option>
            @endforeach
        </select>
        <button type="submit">Schedule Appointment</button>
    </form>
</body>
</html>
