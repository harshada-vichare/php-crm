<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); require_once('./src/db.php'); ?>

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
      <?php $sql = "SELECT `id`, `name`, `description`, `base_price` FROM `products` WHERE `is_deleted` = 'N'"; 
      $result = $conn->query($sql);
      ?>
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
          <?php $count=1; while($row = $result->fetch_assoc()){ ?>
          <tr class="border-b">
            <td class="p-3"><?php echo $count; ?></td>
            <td class="p-3"><?php echo $row['name']; ?></td>
            <td class="p-3"><?php echo $row['base_price']; ?></td>
            <td class="p-3"><?php echo $row['description']; ?></td>
            <td class="p-3">
              <button class="bg-blue-500 px-1 rounded-md text-sm text-white" id=<?php echo "edit_".$row['id']; ?>>
                Edit
              </button>
              <button class="bg-red-500 px-1 rounded-md text-sm text-white" id=<?php echo "delete_".$row['id']; ?>>
                Delete
              </button>
            </td>
          </tr>
          <?php $count++; } ?>
        </tbody>
      </table>
    </div>

    <?php include_once('./src/footer.php'); ?>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        const buttons = document.querySelectorAll('button');

        buttons.forEach(btn => {
          btn.addEventListener('click', function () {
            alert(this.id);
          });
        });
      });
    </script>
  </body>
</html>
