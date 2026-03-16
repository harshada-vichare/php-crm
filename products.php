<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); ?>

    <div
      class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded"
    >
      <h1 class="text-4xl font-bold text-center mb-8">Products</h1>
      <div class="flex justify-between mb-5">
        <button class="bg-yellow-200 px-6 py-2 rounded-2xl">
          <a href="./add-product.php">Add</a>
        </button>
        <input
          class="bg-gray-200 px-8 w-3/4 rounded-md"
          type="text"
          name="search-product"
          id="search-product"
          placeholder="Enter name to search..."
        />
      </div>
      <table>
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3 text-left">No</th>
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Price</th>
            <th class="p-3 text-left">Description</th>
            <th class="p-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Product name</td>
            <td class="p-3">400</td>
            <td class="p-3">Some Description</td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white">
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Product name</td>
            <td class="p-3">400</td>
            <td class="p-3">Some Description</td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white">
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Product name</td>
            <td class="p-3">400</td>
            <td class="p-3">Some Description</td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white">
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Product name</td>
            <td class="p-3">400</td>
            <td class="p-3">Some Description</td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white">
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Product name</td>
            <td class="p-3">400</td>
            <td class="p-3">Some Description</td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white">
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white">
                Delete
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <?php include_once('./src/footer.php'); ?>
  </body>
</html>
