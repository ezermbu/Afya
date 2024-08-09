<!DOCTYPE html>
<html>
<head>
    <title>Medical Record</title>
</head>
<body>
    <h1>Medical Record</h1>
    <p><strong>Name:</strong> {{ Auth::user()->name }}</p>
    <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
    <p><strong>Phone:</strong> {{ Auth::user()->phone }}</p>
    <p><strong>Medical History:</strong></p>
    <p>{{ Auth::user()->medical_history }}</p>
</body>
</html>
