<?php
include 'db_connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which form is being submitted
    if (isset($_POST['flight_number'])) {
        // Handle flight booking
        $airline = $_POST['airline'];
        $flight_number = $_POST['flight_number'];
        $departure_city = $_POST['departure'];
        $arrival_city = $_POST['arrival'];
        $departure_time = $_POST['departure_time'];
        $arrival_time = $_POST['arrival_time'];
        $price = $_POST['price'];

        $sql = "INSERT INTO Flights (airline, flight_number, departure_city, arrival_city, departure_time, arrival_time, price) 
                VALUES ('$airline', '$flight_number', '$departure_city', '$arrival_city', '$departure_time', '$arrival_time', '$price')";

        if ($conn->query($sql) === TRUE) {
            echo "Flight booked successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['hotel_name'])) {
        // Handle hotel booking
        $hotel_name = $_POST['hotel_name'];
        $location = $_POST['location'];
        $rating = $_POST['rating'];
        $price_per_night = $_POST['price_per_night'];
        $amenities = $_POST['amenities'];

        $sql = "INSERT INTO Hotels (hotel_name, location, rating, price_per_night, amenities) 
                VALUES ('$hotel_name', '$location', '$rating', '$price_per_night', '$amenities')";

        if ($conn->query($sql) === TRUE) {
            echo "Hotel booked successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['homestay_name'])) {
        // Handle homestay booking
        $homestay_name = $_POST['homestay_name'];
        $location = $_POST['location'];
        $rating = $_POST['rating'];
        $price_per_night = $_POST['price_per_night'];
        $host_name = $_POST['host_name'];
        $description = $_POST['description'];

        $sql = "INSERT INTO Homestays (homestay_name, location, rating, price_per_night, host_name, description) 
                VALUES ('$homestay_name', '$location', '$rating', '$price_per_night', '$host_name', '$description')";

        if ($conn->query($sql) === TRUE) {
            echo "Homestay booked successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Invalid submission.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close(); // Close the database connection
?>