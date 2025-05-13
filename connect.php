

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $city = $_POST['city'] ?? '';
    $date = $_POST['date'] ?? '';
    $details = $_POST['details'] ?? '';
    $service = $_POST['service'] ?? '';

    $conn = new mysqli('localhost', 'root', '', 'websiteorg');

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO contactus (name, email, phone, city, date, details, service) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $email, $phone, $city, $date, $details, $service);

    if ($stmt->execute()) {
        echo "Form submitted successfully.";
    } else {
        echo "Database error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>





