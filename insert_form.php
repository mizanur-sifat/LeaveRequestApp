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

// Check if form data is submitted
if (isset($_POST['add_records']))  {
    // Collect and sanitize form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $card_no = $_POST['card_no'];
    $department = $_POST['department'];
    $date_of_joining = $_POST['date_of_joining'];
    $leave_applied_for_day = $_POST['leave_applied_for_day'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];
    $leave_type = isset($_POST['leave_type']) ? implode(", ", $_POST['leave_type']) : '';
    $reason = $_POST['reason'];
    $address_during_leave = $_POST['address_during_leave'];

    // Collect industry names
    $industry_names = isset($_POST['industry_name']) ? implode(", ", $_POST['industry_name']) : '';

    // Handle file uploads
    $applicant_signature = $_FILES['applicant_signature']['name'];
    $department_head_signature = $_FILES['department_head_signature']['name'];
    $hr_signature = $_FILES['hr_signature']['name'];

    // Move uploaded files to a directory
    move_uploaded_file($_FILES['applicant_signature']['tmp_name'], "uploads/" . $applicant_signature);
    move_uploaded_file($_FILES['department_head_signature']['tmp_name'], "uploads/" . $department_head_signature);
    move_uploaded_file($_FILES['hr_signature']['tmp_name'], "uploads/" . $hr_signature);

    // Prepare and bind SQL statement
    $sql = "INSERT INTO leave_applications (name, designation, card_no, department, date_of_joining, leave_applied_for_day, from_date, to_date, leave_type, reason, address_during_leave, industry_name, applicant_signature, department_head_signature, hr_signature) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssssssssss", $name, $designation, $card_no, $department, $date_of_joining, $leave_applied_for_day, $from_date, $to_date, $leave_type, $reason, $address_during_leave, $industry_names, $applicant_signature, $department_head_signature, $hr_signature);
        if ($stmt->execute()) {
            echo "New record created successfully<br>";
            // Include the email script to send the email
            include 'sendmail.php';
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
