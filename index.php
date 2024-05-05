<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="index.php">
    <title>Document</title>
</head>
<body>
    <nav class="bg-red-800 text-white flex justify-between">
        <img src="logo.jpg" class="w-20 mx-10 rounded-3xl" alt="">
        <ul class="px-28 py-4 flex space-x-11 text-2xl justify-end items-center">
            <li class="cursor-pointer hover:text-black hover:underline"><a href="index.php">Home</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="cata.html">Catalog</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="about.html">About</li></a>
            <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="contact.html">Contact-US</li></a>
            
            <?php
        // Start PHP code
        session_start();

        // Check if the user is logged in
        if(isset($_SESSION["username"])) {
            // If logged in, display the username and a logout link
            $username = $_SESSION["username"];
            echo '<li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif">Welcome, ' . $username . '</li>';
            echo '<li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="logout.php">Logout</a></li>';
        } else {
            // If not logged in, display a login link
            echo '<li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="login.php">Login</a></li>';
           echo' <li class="cursor-pointer hover:text-black hover:underline hover:font-medium font-serif"><a href="sign-up.html">signup</li></a>';
        }
        ?>

        </ul>

    </nav>
    <main class=" bg-white flex justify-around">
        <div class="main  py-40 pl-9" >
            <div class="text-6xl underline  ">
                Welcome to Lena Dena Bank
            </div>
            <p class=" py-8 text-3xl">Where you can build your dream</p>
            <div class="button space-x-5">
               <a href="cata.html"> <button class="bg-red-500 px-3 py-4 rounded-3xl text-white hover:text-slate-900 hover:border-red-900 hover:bg-red-800 mx-2">Buy Now</button></a>
               <a href="CONTACT.HTML"> <button class="bg-red-500 px-3 py-4 rounded-3xl text-white hover:text-slate-900 hover:border-red-900 hover:bg-red-800 mx-2">Contact-US</button></a>
            </div>
        </div>
        <div class="flex  items-center ">
            <img src="logo.jpg" class="h-34 rounded-3xl" alt="">
        </div>
    </main>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <br>
      <section class="text-black bg-white body-font">
        <div class="container px-40 py-24 mx-auto flex flex-wrap">
            <div class="t"><p>Join Us</p><span class="inline-block h-1 w-10 rounded bg-red-500 hover:bg-red-700  mb-6"></span></div>
          <div class="flex flex-wrap w-full">
            
            <div class="lg:w-2/5 md:w-1/2 md:pr-10">
              <div class="flex relative pb-12">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-red-800 pointer-events-none"></div>
                </div>
                
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-white relative z-10">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-3">
                  <h2 class="font-medium title-font text-sm text-white mb-1 tracking-wider">STEP 1</h2>
                  <p class="leading-relaxed">Click on Log-in.</p>
                </div>
              </div>
              <div class="flex relative pb-12">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-white relative z-10">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2 class="font-medium title-font text-sm text-white mb-1 tracking-wider">STEP 2</h2>
                  <p class="leading-relaxed">Fill up the requred field.</p>
                </div>
              </div>
              <div class="flex relative pb-12">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-white relative z-10">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <circle cx="12" cy="5" r="3"></circle>
                    <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2 class="font-medium title-font text-sm text-white mb-1 tracking-wider">STEP 3</h2>
                  <p class="leading-relaxed">Submit the require Documents. </p>
                </div>
              </div>
              <div class="flex relative pb-12">
                <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-white relative z-10">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2 class="font-medium title-font text-sm text-white mb-1 tracking-wider">STEP 4</h2>
                  <p class="leading-relaxed">Verify your Phone Number and Email-id.</p>
                </div>
              </div>
              <div class="flex relative">
                <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-500 inline-flex items-center justify-center text-white relative z-10">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-4">
                  <h2 class="font-medium title-font text-sm text-white mb-1 tracking-wider">FINISH</h2>
                  <p class="leading-relaxed">Click Submit</p>
                </div>
              </div>
            </div>
            <img class="lg:max-w-lg s:w-full object-cover object-center rounded-lg md:mt-0 mt-12" src="no.jpg" alt="step">
          </div>
        </div>
      </section>
      <hr>
      <hr>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2 w-full">
              <div class="h-full bg-gray-200 p-8 rounded border-2 hover:border-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                  <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                <a class="inline-flex items-center">
                  <img alt="testimonial" src="https://dummyimage.com/106x106" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                  <span class="flex-grow flex flex-col pl-4">
                    <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
                    <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                  </span>
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/2 w-full">
              <div class="h-full bg-gray-200 p-8 rounded border-2 hover:border-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                  <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="leading-relaxed mb-6">Synth chartreuse iPhone lomo cray raw denim brunch everyday carry neutra before they sold out fixie 90's microdosing. Tacos pinterest fanny pack venmo, post-ironic heirloom try-hard pabst authentic iceland.</p>
                <a class="inline-flex items-center">
                  <img alt="testimonial" src="https://dummyimage.com/107x107" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                  <span class="flex-grow flex flex-col pl-4">
                    <span class="title-font font-medium text-gray-900">Alper Kamu</span>
                    <span class="text-gray-500 text-sm">DESIGNER</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
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