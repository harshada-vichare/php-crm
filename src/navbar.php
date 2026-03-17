<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
  $username = $_SESSION['username'];
}else{header('Location: ./login.php');exit;}
?>

<?php require_once('./check-url.php'); ?>
<div class="navbar border-b-2 flex justify-between p-4 items-center">
  <img src="./public/company-logo.png" alt="Company Logo" class="h-16" />
  <div class="mr-10 ml-auto">
    <?php $nameArr = ['home.php','add-product.php','add-lead.php']; 
    if(!in_array($last_part, $nameArr)){ ?>
    <a href="./home.php" class="mr-10">Home</a>
    <?php } ?>
    <span><em>Hello <?php echo $username; ?></em></span>
  </div>
  <button class="bg-blue-500 hover:bg-blue-600 rounded-2xl py-2 px-3">
    <a href="./logout.php">Logout</a>
  </button>
</div>
