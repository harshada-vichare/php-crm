<!DOCTYPE html>
<html lang="en">
  <?php require_once('./src/header.php'); ?>

  <body class="bg-gray-100 font-mono">
    <?php require_once('./src/navbar.php'); require_once('./src/db.php'); ?>

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
      <?php 
      $sql = "SELECT l.`id`, l.`status`, c.customer_name FROM `leads` AS l JOIN `customers` AS c ON l.customer_id = c.id";
      $result = $conn->query($sql);
      ?>
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
          <?php $count=1; while($row = $result->fetch_assoc()){
            switch ($row['status']) {
              case "New": $class = 'text-blue-400'; break;
              case "Won": $class = 'text-green-600'; break;
              case "Lost": $class = 'text-pink-600'; break;
              case "Qualified": $class = 'text-yellow-500'; break;
              case "Contacted": $class = 'text-purple-600'; break;
              default: $class = 'text-gray-600';
            }
            ?>
          <tr class="border-b">
            <td class="p-3"><?php echo $count;?> </td>
            <td class="p-3"><?php echo $row['customer_name']; ?></td>
            <td class="p-3 <?php echo $class; ?>"><?php echo $row['status']; ?></td>
            <td class="p-3">
              <button class="bg-orange-400 text-sm px-1 rounded-md text-white">
                View
              </button>
              <button class="bg-blue-500 text-sm px-1 rounded-md text-white" id=<?php echo "edit_".$row['id']; ?>>
                Edit
              </button>
              <button class="bg-red-500 text-sm px-1 rounded-md text-white" id=<?php echo "delete_".$row['id']; ?>>
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
