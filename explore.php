<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Search - Travel Vista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Travel Vista</h1>
    </header>
    <main>
        <h2>Find Hotels in Your City</h2>
        <form action="fetch_hotels.php" method="POST">
            <label for="city">Choose a city:</label>
            <select name="city" id="city" required>
                <option value="">Select a city</option>
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
                <option value="Miami">Miami</option>
                <option value="San Francisco">San Francisco</option>
                <!-- Add more cities as needed -->
            </select>
            <button type="submit">Search Hotels</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Travel Vista. All Rights Reserved.</p>
    </footer>
</body>
</html>