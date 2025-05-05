<!-- resources/views/reservation-details.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reservation Details</title>
</head>
<body>
    <h1>Reservation Confirmed</h1>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Number of Guests:</strong> {{ $data['guests'] }}</p>
    <p><strong>Date:</strong> {{ $data['date'] }}</p>
    <p><strong>Special Request:</strong> {{ $data['request'] ?? 'None' }}</p>
</body>
</html>
