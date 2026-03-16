<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>
  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); ?>
    <div class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded">
      <h1 class="text-4xl font-bold text-center mb-8">Add Product</h1>
      <form
        action="./save-product.php"
        method="post"
        class="flex flex-col gap-6"
      >
        <div class="flex items-center gap-4">
          <label class="w-32 font-medium">Product name :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Enter name"
          />
        </div>
        <div class="flex items-center gap-4">
          <label class="w-32 font-medium">Product description :</label>
          <textarea
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="product-description"
            placeholder="Product description"
          ></textarea>
        </div>
        <div class="flex items-center gap-4">
          <label class="w-32 font-medium">Product base price :</label>
          <input
            type="text"
            class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
            placeholder="Base price"
            name="product-price"
          />
        </div>

        <div class="flex justify-center gap-4 mt-4">
          <a
            href="./products.php"
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
