<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 min-h-screen font-mono flex flex-col">
    <?php require_once('./src/navbar.php'); require_once('./src/db.php'); ?>

    <div
      class="main bg-white w-2/3 shadow-md text-gray-800 flex flex-grow flex-col gap-4 px-10 py-16 mx-auto my-10 rounded"
    >
      <h1 class="text-4xl font-bold mb-8 text-center">Customers</h1>
      <?php $sql = "SELECT `id`, `customer_name`, `company`, `phone`, `email`
      FROM `customers` WHERE `is_customer` = 'Y'"; $result = $conn->query($sql);
      ?>
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
          <?php $count=1; while($row = $result->fetch_assoc()){ ?>
          <tr class="border-b">
            <td class="p-3"><?php echo $count; ?></td>
            <td class="p-3"><?php echo $row['customer_name']; ?></td>
            <td class="p-3"><?php echo $row['company']; ?></td>
            <td class="p-3">
              <p><?php echo $row['email']; ?></p>
              <p><?php echo $row['phone']; ?></p>
            </td>
            <td class="p-3">
              <button class="bg-orange-400 text-white px-1 text-sm rounded-md">
                View
              </button>
              <button class="bg-blue-500 text-white px-1 text-sm rounded-md"  id=<?php echo "edit_".$row['id']; ?>>
                Edit
              </button>
              <button class="bg-red-500 text-white px-1 rounded-md text-sm"  id=<?php echo "delete_".$row['id']; ?>>
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
