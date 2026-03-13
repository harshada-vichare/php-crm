<?php require_once('./check-url.php'); ?>
<div class="navbar border-b-2 flex justify-between p-4 items-center">
  <img src="./public/company-logo.png" alt="Company Logo" class="h-16" />
  <div class="mr-10 ml-auto">
    <?php if($last_part !== 'home.php'){ ?>
    <a href="./home.php" class="mr-10">Home</a>
    <?php } ?>
    <span><em>Hello X</em></span>
  </div>
  <button class="bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 px-3">
    Logout
  </button>
</div>
