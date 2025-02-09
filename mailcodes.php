<?php
    // // Use Composer's autoloader
    // require 'vendor/autoload.php'; // Ensure this path is correct

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\Exception;

    // // Collect form data
    // $name = $_POST["name"];
    // $designation = $_POST['designation'];
    // $card_no = $_POST['card_no'];
    // $department = $_POST['department'];
    // $date_of_joining = $_POST['date_of_joining'];
    // $leave_applied_for_day = $_POST['leave_applied_for_day'];
    // $from_date = $_POST['from_date'];
    // $to_date = $_POST['to_date'];
    // $leave_type = isset($_POST['leave_type']) ? implode(", ", $_POST['leave_type']) : '';
    // $reason = $_POST['reason'];
    // $address_during_leave = $_POST['address_during_leave'];

    // $mail = new PHPMailer(true);

    // try {
    //     // Server settings
    //     $mail->isSMTP();                                      // Set mailer to use SMTP
    //     $mail->Host = 'smtp.gmail.com';                       // Specify main SMTP server
    //     $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //     $mail->Username = 'sifat.lizfashion@gmail.com';       // SMTP username (your Gmail address)
    //     $mail->Password = 'ytxvfufyoxwmjwda';       // SMTP password (replace with your 16-digit app password)
    //     $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    //     $mail->Port = 587;                                    // TCP port to connect to

    //     // Sender info
    //     $mail->setFrom('sifat.lizfashion@gmail.com', $name);

    //     // Recipient info
    //     $mail->addAddress('mrahmansifat98@gmail.com');        // Add a recipient (boss's email)
    //     $mail->addReplyTo('info@example.com', 'Information'); // Reply-To address (optional)

    //     // Email content
    //     $mail->isHTML(true);                                  // Set email format to HTML
    //     $mail->Subject = 'New Leave Application Submitted';
    //     $mail->Body    = '
    //         A leave application has been submitted for approval:<br><br>
    //         <strong>Name:</strong> ' . $name . '<br>
    //         <strong>Designation:</strong> ' . $designation . '<br>
    //         <strong>Department:</strong> ' . $department . '<br>
    //         <strong>Leave Type:</strong> ' . $leave_type . '<br>
    //         <strong>From Date:</strong> ' . $from_date . '<br>
    //         <strong>To Date:</strong> ' . $to_date . '<br>
    //         <strong>Reason:</strong> ' . $reason . '<br>
    //         <strong>Address During Leave:</strong> ' . $address_during_leave . '
    //     ';
    //     $mail->AltBody = 'A leave application has been submitted. Details are included in the HTML version of this email.';

    //     // Send email
    //     $mail->send();
    //     echo 'Message has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
?>

