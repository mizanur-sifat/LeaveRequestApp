<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Application Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f2f5;
            font-size: 14px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            color: #333;
        }

        .form-group label {
            font-weight: bold;
            font-size: 14px;
        }

        .form-control {
            font-size: 13px;
            padding: 5px 10px;
        }

        .signature-box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 55px;
            border: 1px solid #333;
            margin-top: -10px;
            padding: 8px;
            font-size: 13px;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .signature-box label {
            margin-bottom: 5px;
        }

        .signature-box input[type="file"] {
            font-size: 12px;
            margin: 0;
        }


        .form-check-label {
            margin-left: 3px;
            font-size: 13px;
        }

        .leave-type-checkboxes {
            display: flex;
            justify-content: space-between;
        }

        .leave-type-checkboxes .form-check {
            width: 30%;
        }

        .custom-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container custom-container">
        <form id="" action="insert_form.php" method="post" enctype="multipart/form-data">
            <!-- Header Checkboxes -->
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="lizFashion" name="industry_name[]" value="LIZ FASHION INDUSTRY">
                    <label class="form-check-label" for="lizFashion">LIZ FASHION INDUSTRY</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="lizKnitting" name="industry_name[]" value="LIZ KNITTING & PRINTING INDUSTRY">
                    <label class="form-check-label" for="lizKnitting">LIZ KNITTING & PRINTING INDUSTRY</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="hmnFashion" name="industry_name[]" value="HMN FASHION INDUSTRY LTD">
                    <label class="form-check-label" for="hmnFashion">HMN FASHION INDUSTRY LTD</label>
                </div>
            </div>

            <!-- Title -->
            <h4 class="form-header">Leave Application Form</h4>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group col-md-4">
                    <label for="designation">Designation:</label>
                    <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter your designation">
                </div>
                <div class="form-group col-md-4">
                    <label for="cardNo">Card No:</label>
                    <input type="text" class="form-control" id="cardNo" name="card_no" placeholder="Enter your card number">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter your department">
                </div>
                <div class="form-group col-md-4">
                    <label for="dateOfJoining">Date of Joining:</label>
                    <input type="date" class="form-control" id="dateOfJoining" name="date_of_joining">
                </div>
                <div class="form-group col-md-4">
                    <label for="leaveAppliedForDay">Leave Applied For (Day):</label>
                    <input type="text" class="form-control" id="leaveAppliedForDay" name="leave_applied_for_day" placeholder="Enter number of days">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fromDate">From (Date):</label>
                    <input type="date" class="form-control" id="fromDate" name="from_date">
                </div>
                <div class="form-group col-md-6">
                    <label for="toDate">To (Date):</label>
                    <input type="date" class="form-control" id="toDate" name="to_date">
                </div>
            </div>
            <div class="form-group">
                <label>Type of Leave asked (Please put Tick):</label>
                <div class="leave-type-checkboxes">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="casualLeave" name="leave_type[]" value="Casual Leave">
                        <label class="form-check-label" for="casualLeave">Casual Leave</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sickLeave" name="leave_type[]" value="Sick Leave">
                        <label class="form-check-label" for="sickLeave">Sick Leave</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="annualLeave" name="leave_type[]" value="Annual Leave">
                        <label class="form-check-label" for="annualLeave">Annual Leave</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="reason">Reason for Leave:</label>
                    <textarea class="form-control" id="reason" name="reason" rows="3" placeholder="Enter your reason for leave"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Address during Leave:</label>
                    <textarea class="form-control" id="address" name="address_during_leave" rows="3" placeholder="Enter your address during leave"></textarea>
                </div>
            </div>

            <!-- Signatures -->
            <div class="signature-section">
                <div class="signature-box">
                    <label for="applicantSignature">Signature of Applicant</label>
                    <input type="file" id="applicantSignature" name="applicant_signature" class="form-control-file">
                </div>
                <div class="signature-box">
                    <label for="departmentHeadSignature">Signature of Department Head</label>
                    <input type="file" id="departmentHeadSignature" name="department_head_signature" class="form-control-file">
                </div>
                <div class="signature-box">
                    <label for="hrSignature">Signature of Approval Authority (HR)</label>
                    <input type="file" id="hrSignature" name="hr_signature" class="form-control-file">
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="add_records" value="Submit">
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#cardNo").on("input", function() {
                var cardNumber = $(this).val();
                if (cardNumber) {
                    $.ajax({
                        url: "fetch_leave_records.php",
                        type: "GET",
                        data: {
                            card_no: cardNumber
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.error) {
                                console.log(data.error);
                                // Handle errors (e.g., show message to user)
                            } else {
                                $("#name").val(data.name);
                                $("#designation").val(data.designation);
                                $("#department").val(data.department);
                                $("#dateOfJoining").val(data.date_of_joining);
                                $("#casualLeaveStatus").val(data.casual_leave);
                                $("#sickLeaveStatus").val(data.sick_leave);
                                $("#annualLeaveStatus").val(data.annual_leave);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log("AJAX error: " + status + " - " + error);
                            // Handle AJAX errors (e.g., show message to user)
                        }
                    });
                } else {
                    $("#name").val("");
                    $("#designation").val("");
                    $("#department").val("");
                    $("#dateOfJoining").val("");
                    $("#casualLeaveStatus").val("");
                    $("#sickLeaveStatus").val("");
                    $("#annualLeaveStatus").val("");
                }
            });

            $("#leaveApplicationForm").on("submit", function(e) {
                e.preventDefault();
                // Collect form data
                var formData = new FormData(this);

                // Send form data via AJAX
                $.ajax({
                    url: "insert_form.php",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log("Form submitted successfully.");
                        // Handle success 
                    },
                    error: function(xhr, status, error) {
                        console.log("AJAX error: " + status + " - " + error);
                        // Handle errors 
                    }
                });
            });
        });
    </script>
</body>

</html>