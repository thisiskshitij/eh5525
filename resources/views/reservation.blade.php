<!-- resources/views/reservation.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Reservation</title>
</head>
<body>
    <h1>Make a Reservation</h1>

    <form action="{{ route('reservation.submit') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="guests">Number of Guests:</label><br>
        <input type="number" name="guests" min="1" required><br><br>

        <label for="date">Date of Reservation:</label><br>
        <input type="date" name="date" required><br><br>

        <label for="request">Special Request:</label><br>
        <textarea name="request" rows="4" cols="40"></textarea><br><br>

        <button type="submit">Submit Reservation</button>
    </form>
</body>
</html>
