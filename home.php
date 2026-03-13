<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>
  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); ?>

    <div
      class="main bg-white rounded w-auto shadow-md flex flex-grow text-center text-gray-800 justify-between gap-16 mx-auto my-10 px-10 py-16"
    >
      <div
        class="bg-sky-200 rounded-lg w-40 p-12 h-40 flex flex-col items-center justify-center"
      >
        <p
          class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
        >
          4
        </p>
        <p class="font-bold">Customers</p>
      </div>
      <div
        class="bg-lime-300 rounded w-40 p-12 h-40 flex flex-col items-center justify-center"
      >
        <p
          class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
        >
          15
        </p>
        <p class="font-bold">Products</p>
      </div>
      <div
        class="bg-purple-300 rounded w-40 p-12 h-40 flex flex-col items-center justify-center"
      >
        <p
          class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
        >
          12
        </p>
        <p class="font-bold">Leads</p>
      </div>
    </div>

    <?php include_once('./src/footer.php'); ?>
  </body>
</html>
