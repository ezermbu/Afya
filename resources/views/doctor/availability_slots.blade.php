<!DOCTYPE html>
<html>
<head>
    <title>Availability Slots</title>
</head>
<body>
    <h1>Your Availability Slots</h1>
    <table>
        <thead>
            <tr>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slots as $slot)
                <tr>
                    <td>{{ $slot->start_time }}</td>
                    <td>{{ $slot->end_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
