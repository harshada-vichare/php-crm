<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); ?>

    <div
      class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded"
    >
      <h1 class="text-4xl font-bold mb-8 text-center">Customers</h1>
      <table>
        <thead class="bg-gray-200">
          <tr>
            <th class="p-3 text-left">No</th>
            <th class="p-3 text-left">Customer</th>
            <th class="p-3 text-left">Company</th>
            <th class="p-3 text-left">Contact</th>
            <th class="p-3 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">ABC Ltd.</td>
            <td class="p-3">
              <p>abc.new@abc.in</p>
              <p>9878675645</p>
            </td>
            <td class="p-3">
              <button class="bg-orange-400 text-white px-1 text-sm rounded-md">
                View
              </button>
              <button class="bg-blue-500 text-white px-1 text-sm rounded-md">
                Edit
              </button>
              <button class="bg-red-500 text-white px-1 rounded-md text-sm">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">ABC Ltd.</td>
            <td class="p-3">
              <p>abc.new@abc.in</p>
              <p>9878675645</p>
            </td>
            <td class="p-3">
              <button class="bg-orange-400 text-white px-1 text-sm rounded-md">
                View
              </button>
              <button class="bg-blue-500 text-white px-1 text-sm rounded-md">
                Edit
              </button>
              <button class="bg-red-500 text-white px-1 rounded-md text-sm">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">ABC Ltd.</td>
            <td class="p-3">
              <p>abc.new@abc.in</p>
              <p>9878675645</p>
            </td>
            <td class="p-3">
              <button class="bg-orange-400 text-white px-1 text-sm rounded-md">
                View
              </button>
              <button class="bg-blue-500 text-white px-1 text-sm rounded-md">
                Edit
              </button>
              <button class="bg-red-500 text-white px-1 rounded-md text-sm">
                Delete
              </button>
            </td>
          </tr>
          <tr class="border-b">
            <td class="p-3">1</td>
            <td class="p-3">Customer Name</td>
            <td class="p-3">ABC Ltd.</td>
            <td class="p-3">
              <p>abc.new@abc.in</p>
              <p>9878675645</p>
            </td>
            <td class="p-3">
              <button class="bg-orange-400 text-white px-1 text-sm rounded-md">
                View
              </button>
              <button class="bg-blue-500 text-white px-1 text-sm rounded-md">
                Edit
              </button>
              <button class="bg-red-500 text-white px-1 rounded-md text-sm">
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
