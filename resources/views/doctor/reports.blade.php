<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
</head>
<body>
    <h1>Your Reports</h1>
    <table>
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Report</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->patient_id }}</td>
                    <td>{{ $report->report }}</td>
                    <td>{{ $report->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
