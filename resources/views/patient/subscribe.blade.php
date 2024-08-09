<!DOCTYPE html>
<html>
<head>
    <title>Subscribe to Hospital</title>
</head>
<body>
    <form method="POST" action="{{ url('patient/subscribe') }}">
        @csrf
        <label>Select Hospital:</label>
        <select name="hospital_id">
            @foreach($hospitals as $hospital)
                <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
            @endforeach
        </select>
        <button type="submit">Subscribe</button>
    </form>
</body>
</html>
