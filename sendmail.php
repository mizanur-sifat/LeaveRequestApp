<?php
// Collect form data
$name = $_POST["name"];
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

// Generate approval and denial URLs (replace with your own URL structure)
$leave_id = 123; 
$approve_url = "http://yourdomain.com/approve_leave.php?id=$leave_id";
$deny_url = "http://yourdomain.com/deny_leave.php?id=$leave_id";

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'user@gmail.com';     //User's mail
    $mail->Password = 'xxxxxxxxxxxxxxx';    // Your 16-digit app password

    // Sender info
    $mail->setFrom('sender@gmail.com', $name);

    // Recipient info
    $mail->addAddress('boss@gmail.com', 'Mr. Boss');  // Replace with the boss's email

    // Email content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Leave Application Submitted';
    $mail->Body    = "
    <p>A leave application has been submitted for approval:</p>
    <table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>
        <tr>
            <th style='text-align: left;'>Field</th>
            <th style='text-align: left;'>Value</th>
        </tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>$name</td>
        </tr>
        <tr>
            <td><strong>Designation:</strong></td>
            <td>$designation</td>
        </tr>
        <tr>
            <td><strong>Department:</strong></td>
            <td>$department</td>
        </tr>
        <tr>
            <td><strong>Leave Type:</strong></td>
            <td>$leave_type</td>
        </tr>
        <tr>
            <td><strong>From Date:</strong></td>
            <td>$from_date</td>
        </tr>
        <tr>
            <td><strong>To Date:</strong></td>
            <td>$to_date</td>
        </tr>
        <tr>
            <td><strong>Reason:</strong></td>
            <td>$reason</td>
        </tr>
        <tr>
            <td><strong>Address During Leave:</strong></td>
            <td>$address_during_leave</td>
        </tr>
    </table>
    <br>
    <a href='$approve_url' style='background-color:green;color:white;padding:10px 15px;text-decoration:none;'>Approve Leave</a>
    <a href='$deny_url' style='background-color:red;color:white;padding:10px 15px;text-decoration:none;margin-left:10px;'>Deny Leave</a>
";

    // Send email
    $mail->send();
    echo "Mail sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
