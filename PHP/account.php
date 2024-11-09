<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Account Details</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <nav class="bg-red-800 text-white flex justify-between">
        <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="">
        <ul class="px-28 py-4 flex space-x-11 text-2xl justify-end items-center">
            <li class="cursor-pointer hover:text-black hover:underline"><a href="index.php">Home</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="cata.html">Catalog</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="about.html">About</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="contact.php">Contact-US</li></a>

        </ul>
    </nav>
    <hr>
    <hr>
  <div class="container mx-auto mt-10 px-4 py-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center">Loan Account Details</h2>
    <div class="details-container mt-6">
      <?php
      session_start();
      $username = $_SESSION["username"];
      echo '<p><strong>User Name:</strong>'.$username. '</p>' ;
       ?>
      <p><strong>Account Number:</strong> 123456789</p>
      <p><strong>Balance:</strong> $5000</p>
      <p><strong>Payment History:</strong> January - $1000, February - $1000, March - $1000</p>
      <p><strong>Remaining Tenure:</strong> 24 months</p>
    </div>
    <div class="update-form mt-6">
      <h3 class="text-lg font-semibold">Update Account Information</h3>
      <form id="account-update-form" class="mt-4">
        <label for="address" class="block mb-1">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter new address" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        <label for="contact" class="block mb-1 mt-4">Contact Information:</label>
        <input type="text" id="contact" name="contact" placeholder="Enter new contact information" required
          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 mt-4 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-600">Update</button>
      </form>
    </div>
  </div>
  <section class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-col px-5 py-24 justify-center items-center">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="credit.jpg">
    <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">check your Creat Score</h1>
      <p class="mb-8 leading-relaxed">"Aim for Financial Wellness: Check Your Credit Score Below".</p>
      <div class="credit-score-widget mt-10 max-w-sm mx-auto p-5  border  rounded-lg shadow-md bg-white">
    <div class="text-4xl font-bold text-center text-gray-800 mb-2" id="credit-score">Loading...</div>
    <div class="text-lg font-semibold text-center text-gray-600 mb-2">Your Credit Score</div>
  </div>
      </div>
    </div>
  </div>
</section>

  <br>
  <br>
  <br>
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
  <script>
    function generateRandomScore() {
      // Generate a random credit score between 300 and 850
      var creditScore = Math.floor(Math.random() * (850 - 300 + 1)) + 300;

      // Update the credit score value in the widget
      document.getElementById('credit-score').innerText = creditScore;
    }

    // Call the function when the page loads
    window.onload = generateRandomScore;
  </script>
  <script>
    document.getElementById('account-update-form').addEventListener('submit', function(event) {
      event.preventDefault();
      // Get form values
      var address = document.getElementById('address').value;
      var contact = document.getElementById('contact').value;
      
      // Update account information (You can add your logic here to update the account information via AJAX request)
      // For demo purpose, let's just log the values to console
      console.log('Updated Address:', address);
      console.log('Updated Contact Information:', contact);
      
      // Reset form
      document.getElementById('account-update-form').reset();
    });
  </script>


</body>
</html>
