<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
  </head>
  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <div class="navbar border-b-2 flex justify-between p-4 items-center">
      <img src="./public/company-logo.png" alt="Company Logo" class="h-16" />
      <span class="mr-10 ml-auto"><em>Hello X</em></span>
      <button class="bg-blue-500 hover:bg-blue-600 py-2 px-3 rounded-2xl">
        Logout
      </button>
    </div>
    <div
      class="main bg-white rounded w-auto shadow-md flex flex-grow text-center text-gray-800 justify-between gap-16 mx-auto my-10 px-10 py-16"
    >
      <div class="bg-sky-200 rounded-lg w-40 p-12 h-40">
        <p class="text-2xl italic">4</p>
        <p class="font-bold">Customers</p>
      </div>
      <div class="bg-lime-300 rounded w-40 p-12 h-40">
        <p class="text-2xl italic">15</p>
        <p class="font-bold">Products</p>
      </div>
      <div class="bg-purple-300 rounded w-40 p-12 h-40">
        <p class="text-2xl italic">12</p>
        <p class="font-bold">Leads</p>
      </div>
    </div>
    <div class="footer flex justify-center border-t-2">
      <p class="p-4">Copyright &copy; X</p>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
