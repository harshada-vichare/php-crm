<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>
  <body class="bg-gray-100 font-mono">
    <?php require_once('./src/navbar.php'); ?>
    <div
      class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded"
    >
      <h1 class="text-4xl font-bold text-center mb-8">Leads</h1>
      <div class="flex justify-between mb-5">
        <button class="bg-yellow-200 px-6 py-2 rounded-2xl">
          <a href="./add-lead.php">Add</a>
        </button>
        <input
          class="bg-gray-200 w-3/4 rounded-md px-8"
          type="text"
          name="search-lead"
          id="search-lead"
          placeholder="Enter name to search..."
        />
      </div>
      <table>
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3 text-left">No</th>
            <th class="p-3 text-left">Customer</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">Contacted</td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white">
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">Contacted</td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white">
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">Contacted</td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white">
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">Contacted</td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white">
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">Contacted</td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white">
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white">
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
