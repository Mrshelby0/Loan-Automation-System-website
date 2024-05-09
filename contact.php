<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cont"; // Adjusted to match the database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if form data is submitted
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement to insert data
    $sql = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-US</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-red-800 text-white flex justify-between">
        <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="">
        <ul class="px-28 py-4 flex space-x-11 text-2xl justify-end items-center">
            <li class="cursor-pointer hover:text-black hover:underline"><a href="index.php">Home</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="cata.html">Catalog</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="about.html">About</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="contact.html">Contact-US</li></a>

        </ul>
    </nav>
    <hr>
    <hr>
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
          </div>
          <!-- Start of form -->
          <form action="contact.php" method="POST" class="lg:w-1/2 md:w-2/3 mx-auto">
              <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-1/2">
                      <div class="relative">
                          <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                          <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                  </div>
                  <div class="p-2 w-1/2">
                      <div class="relative">
                          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                          <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                  </div>
                  <div class="p-2 w-full">
                      <div class="relative">
                          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                          <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      </div>
                  </div>
                  <div class="p-2 w-full">
                      <button type="submit" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Send Message</button>
                  </div>
              </div>
          </form>
          <!-- End of form -->
      </div>
  </section>
  
      <hr>
      <hr>
      <footer class="text-white bg-red-800 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-white hover:text-black hover:cursor-pointer" href="index.html">
            <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="">
            <span class="ml-3 text-xl">Loan Automation System</span>
          </a>
          <p class="text-sm text-white sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 vanshika —
            <a href="https://twitter.com/knyttneve" class="text-white ml-1" target="_blank" rel="noopener noreferrer">@vanshika</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-white hover:text-black hover:cursor-pointer">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-white hover:text-black hover:cursor-pointer">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-white hover:text-black hover:cursor-pointer">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-white hover:text-black hover:cursor-pointer">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
</body>
</html>