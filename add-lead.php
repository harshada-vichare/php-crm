<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>
  <body>
    <?php require_once('./src/navbar.php'); ?>
    <div
      class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded"
    >
      <h1 class="text-4xl font-bold text-center mb-8">Add Product</h1>
      <form action="./save-lead.php" method="post" class="flex flex-col gap-6">
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Customer name :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="customer-name"
            placeholder="Customer name"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Company :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="company"
            placeholder="Company"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Phone :</label>
          <input
            type="tel"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="phone"
            placeholder="Phone"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Email :</label>
          <input
            type="email"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="email"
            placeholder="Email"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Website :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="website"
            placeholder="Website"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Product :</label>
          <select
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="product"
          >
            <option value="Select option">Select option</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
          </select>
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Quantity :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="quantity"
            placeholder="Quantity"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Price :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="price"
            placeholder="Price"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Lead from :</label>
          <select
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="lead-from"
          >
            <option value="Select option">Select option</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
          </select>
        </div>
        <div class="flex items-center gap-4">
          <label class="w-36 font-medium">Status :</label>
          <select
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus: ring-blue-500"
            name="Status"
          >
            <option value="Select option">Select option</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
            <option value="Product">Product</option>
          </select>
        </div>
        <div class="flex justify-center gap-4 mt-4">
          <a
            href="./leads.php"
            class="px-4 py-2 bg-gray-400 text-white rounded"
          >
            Cancel
          </a>

          <input
            type="submit"
            value="Save"
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
          />
        </div>
      </form>
    </div>

    <?php include_once('./src/footer.php'); ?>
  </body>
</html>
