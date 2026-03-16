<?php require_once('./check-url.php'); ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php print_r(ucfirst(str_replace("-", " ", explode('.', $last_part)[0])));
    ?>
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
