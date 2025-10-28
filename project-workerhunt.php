<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WorkerHunt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex flex-col items-center justify-center min-h-screen bg-gray-50 text-gray-900">
    <header class="absolute top-0 left-0 w-full flex justify-between items-center p-3 shadow-md">
      <h1 class="text-2xl font-bold">
        <span class="text-blue-700">Worker</span><span class="text-red-600">Hunt</span>
      </h1>
      <nav class="hidden md:flex space-x-6">
        <a href="#" class="hover:text-blue-700">Home</a>
        <a href="#" class="hover:text-blue-700">Browse Jobs</a>
        <a href="#" class="hover:text-blue-700">Post a Job</a>
        <a href="#" class="hover:text-blue-700">Login</a>
      </nav>
    </header>
    <main class="flex flex-col items-center text-center px-4">
      <h2 class="text-3xl md:text-4xl font-semibold mb-6">Find Trusted Local Workers Near You</h2>
      <div class="flex w-full max-w-xl bg-white shadow-md rounded-full overflow-hidden border border-gray-200">
        <input
          type="text"
          placeholder="Search for workers, e.g. plumber, electrician..."
          class="flex-grow px-6 py-3 text-gray-700 focus:outline-none"
        />
        <button class="bg-blue-700 text-white px-6 py-3 font-medium hover:bg-blue-800">
            <i class="fa fa-search"></i>
        </button>
      </div>

      <div class="flex space-x-4 mt-6">
        <button class="bg-red-600 text-white px-5 py-2 rounded-full font-medium hover:bg-red-700">Become a Worker</button>
        <button class="border border-blue-700 text-blue-700 px-5 py-2 rounded-full font-medium hover:bg-blue-50">Learn More</button>
      </div>
    </main>

    <!-- Footer -->
    <footer class="absolute bottom-4 text-gray-500 text-sm">
      © 2025 WorkerHunt. All rights reserved.
    </footer>
  </body>
</html>