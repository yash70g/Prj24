<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $formData = [];

    foreach ($_POST as $key => $value) {
        $formData[$key] = htmlspecialchars(strip_tags(trim($value)));
    }

    // Example: Handle different forms based on the submitted data
    if (isset($formData['departure']) && isset($formData['arrival'])) {
        // This could be a flight or train booking
        // Process flight or train booking
        echo "Booking Details:<br>";
        echo "Departure: " . $formData['departure'] . "<br>";
        echo "Arrival: " . $formData['arrival'] . "<br>";
        if (isset($formData['date'])) {
        echo "Travel Date: " . $formData['date'] . "<br>";
        }
    }

    if (isset($formData['hotel_name'])) {
        // This is a hotel booking
        echo "Hotel Booking Details:<br>";
        echo "Hotel Name: " . $formData['hotel_name'] . "<br>";
        echo "Check-in Date: " . $formData['checkin'] . "<br>";
        echo "Check-out Date: " . $formData['checkout'] . "<br>";
    }

    if (isset($formData['homestay_name'])) {
        // This is a homestay booking
        echo "Homestay Booking Details:<br>";
        echo "Homestay Name: " . $formData['homestay_name'] . "<br>";
        echo "Check-in Date: " . $formData['checkin'] . "<br>";
        echo "Check-out Date: " . $formData['checkout'] . "<br>";
    }

    // Here you can add logic to save the booking details to a database or send an email confirmation

} else {
    echo "Invalid request method.";
}
?>