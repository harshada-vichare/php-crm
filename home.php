<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); require_once('./src/db.php'); ?>

    <div
      class="main bg-white rounded w-auto shadow-md flex flex-grow text-center text-gray-800 justify-between gap-16 mx-auto my-10 px-10 py-16"
    >
      <?php 
      $products_sql = "SELECT `id` FROM `products` WHERE `is_deleted` = 'N'"; 
      $products_result = $conn->query($products_sql);

      
      $customers_sql = "SELECT `id` FROM `customers` WHERE `is_customer` = 'Y'"; 
      $customers_result = $conn->query($customers_sql);

      // not selected which count to show - won | lost | all
      $leads_sql = "SELECT `id` FROM `leads`"; 
      $leads_result = $conn->query($leads_sql);
      ?>
      <a href="./customers.php">
        <div
          class="bg-sky-200 rounded-lg w-40 p-12 h-40 flex flex-col items-center justify-center"
        >
          <p
            class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
          >
          <?php echo $customers_result->num_rows; ?>
          </p>
          <p class="font-bold">Customers</p>
        </div>
      </a>
      <a href="./products.php">
        <div
          class="bg-lime-300 rounded w-40 p-12 h-40 flex flex-col items-center justify-center"
        >
          <p
            class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
          >
          <?php echo $products_result->num_rows; ?>
          </p>
          <p class="font-bold">Products</p>
        </div>
      </a>
      <a href="./leads.php">
        <div
          class="bg-purple-300 rounded w-40 p-12 h-40 flex flex-col items-center justify-center"
        >
          <p
            class="text-lg italic bg-red-800 w-10 h-10 p-2 rounded-full mb-3 text-white"
          >
          <?php echo $leads_result->num_rows; ?>
          </p>
          <p class="font-bold">Leads</p>
        </div>
      </a>
    </div>

    <?php include_once('./src/footer.php'); ?>
  </body>
</html>
