<?php
include('dbconnect.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'] ?? null;
    $date = $_POST['date'] ?? null;
    $email = $_POST['emailId'] ?? null;

    if (!$destination || !$date || !$email) {
        echo json_encode(['success' => false, 'message' => 'Missing input fields']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO bookings (destination, travel_date, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $destination, $date, $email);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $conn->error]);
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
