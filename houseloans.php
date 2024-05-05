<?php
// Database connection parameters
$servername = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Empty string for no password
$database = "homeloan"; // Database name

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
    $stmt = $conn->prepare("INSERT INTO homeloans (father_name, mother_name, phone_number, email, address, dob, annual_income, marital_status, occupation, account_number, ifsc_code, branch_number, bank_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Loan Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <nav class="bg-red-800 text-white flex justify-between">
        <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="">
        <ul class="px-28 py-4 flex space-x-11 text-2xl justify-end items-center">
            <li class="cursor-pointer hover:text-black hover:underline"><a href="index.html">Home</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="cata.html">Catalog</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="about.html">About</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="contact.html">Contact-US</li></a>

        </ul>
    </nav>
<br>
<br>
<br>
<div class="max-w-md mx-auto bg-white p-8 rounded-md border-red-500 shadow-md">
    <h2 class="text-2xl font-bold mb-4">Personal Information</h2>
    <form action="houseloans.php" method="POST">
        <div class="mb-4">
            <label for="father_name" class="block text-gray-700  font-bold mb-2">Your Name</label>
            <input type="text" id="your_name" name="your_name" class="w-full px-3 py-2 border hover:border-red-500 rounded-md">
        </div>
        <div class="mb-4">
            <label for="father_name" class="block text-gray-700  font-bold mb-2">Father's Name</label>
            <input type="text" id="father_name" name="father_name" class="w-full px-3 py-2 border hover:border-red-500 rounded-md">
        </div>
        <div class="mb-4">
            <label for="mother_name" class="block text-gray-700 font-bold mb-2">Mother's Name</label>
            <input type="text" id="mother_name" name="mother_name" class="w-full px-3 py-2 hover:border-red-500 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="phone_number" class="block text-gray-700 font-bold mb-2">Phone Number</label>
            <input type="tel" id="phone_number" name="phone_number" class="w-full hover:border-red-500 px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2  hover:border-red-500 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
            <textarea id="address" name="address" class="w-full px-3 py-2 border hover:border-red-500 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="dob" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="w-full px-3 py-2 hover:border-red-500 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="annual_income" class="block text-gray-700 font-bold mb-2">Annual Income</label>
            <input type="text" id="annual_income" name="annual_income" class="w-full  hover:border-red-500 px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="marital_status" class="block text-gray-700 font-bold mb-2">Marital Status</label>
            <select id="marital_status" name="marital_status" class="w-full px-3 py-2  hover:border-red-500 border rounded-md">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="occupation" class="block text-gray-700 font-bold mb-2">Occupation</label>
            <input type="text" id="occupation" name="occupation" class="w-full hover:border-red-500 px-3 py-2 border rounded-md">
        </div>

        <h2 class="text-2xl font-bold mb-4">Bank Information</h2>
        <div class="mb-4">
            <label for="account_number" class="block text-gray-700 font-bold mb-2">Account Number</label>
            <input type="text" id="account_number" name="account_number" class="w-full hover:border-red-500 px-3 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="ifsc_code" class="block text-gray-700 font-bold mb-2">IFSC Code</label>
            <input type="text" id="ifsc_code" name="ifsc_code" class="w-full px-3 py-2 hover:border-red-500 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="branch_number" class="block text-gray-700 font-bold mb-2">Branch Number</label>
            <input type="text" id="branch_number" name="branch_number" class="w-full px-3 hover:border-red-500 py-2 border rounded-md">
        </div>
        <div class="mb-4">
            <label for="bank_number" class="block text-gray-700 font-bold mb-2">Bank Number</label>
            <input type="text" id="bank_number" name="bank_number" class="w-full px-3 hover:border-red-500 py-2 border rounded-md">
        </div>

        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
</div>

</body>
</html>
