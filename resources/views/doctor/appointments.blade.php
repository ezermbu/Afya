<!DOCTYPE html>
<html>
<head>
    <title>Appointments</title>
</head>
<body>
    <h1>Your Appointments</h1>
    <table>
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Scheduled At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->patient_id }}</td>
                    <td>{{ $appointment->scheduled_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
