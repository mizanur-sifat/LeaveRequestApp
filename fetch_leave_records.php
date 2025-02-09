<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";  
$dbname = "leave_management";  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ensure `card_no` is received via GET request
if (isset($_GET['card_no'])) {
    $card_no = $_GET['card_no'];

    // Prepare SQL statement
    $sql = "SELECT name, designation, department, date_of_joining, casual_leave, sick_leave, annual_leave FROM leave_records WHERE card_no = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $card_no);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any records are found
        if ($result->num_rows > 0) {
            echo json_encode($result->fetch_assoc());
        } else {
            echo json_encode(["error" => "No records found"]);
        }

        $stmt->close();
    } else {
        echo json_encode(["error" => "SQL prepare statement failed"]);
    }
} else {
    echo json_encode(["error" => "No card number provided"]);
}

$conn->close();
?>
