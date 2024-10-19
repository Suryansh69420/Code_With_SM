<?php
// enroll.php

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get course name from the POST request
    $courseName = $_POST['courseName'];

    // Simulate saving the enrollment (e.g., saving to a database)
    // For simplicity, we will just return a success message.
    // You can replace this with actual database code.

    $response = [
        "status" => "success",
        "message" => "You have enrolled in the course: " . htmlspecialchars($courseName)
    ];

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
} else {
    // If not a POST request, return an error
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Method Not Allowed"]);
    exit();
}
?>
