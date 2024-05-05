<?php
// Database connection parameters
$servername = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Empty string for no password
$database = "eduloan"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $your_name = $_POST["your_name"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $phone_number = $_POST["phone_number"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];
    $annual_income = $_POST["annual_income"];
    $marital_status = $_POST["marital_status"];
    $occupation = $_POST["occupation"];
    $account_number = $_POST["account_number"];
    $ifsc_code = $_POST["ifsc_code"];
    $branch_number = $_POST["branch_number"];
    $bank_number = $_POST["bank_number"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO eduloan (father_name, mother_name, phone_number, email, address, dob, annual_income, marital_status, occupation, account_number, ifsc_code, branch_number, bank_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssdssssss", $father_name, $mother_name, $phone_number, $email, $address, $dob, $annual_income, $marital_status, $occupation, $account_number, $ifsc_code, $branch_number, $bank_number);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
