<!DOCTYPE html>
<html>
<head>
    <title>Patient Reports</title>
</head>
<body>
    <h1>Patient Reports</h1>
    <table>
        <thead>
            <tr>
                <th>Doctor ID</th>
                <th>Patient ID</th>
                <th>Report</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->doctor_id }}</td>
                    <td>{{ $report->patient_id }}</td>
                    <td>{{ $report->report }}</td>
                    <td>{{ $report->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
