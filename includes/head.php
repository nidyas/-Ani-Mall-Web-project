<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Mogra%7cRubik:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title> Animal<?php if(isset($page_title)) { echo ' - ' . $page_title; } ?></title>
</head>
<body>
  <div class="page-wrap">
    <header>
      <h1><a href="index.php">Animal</a></h1>
      <?php if(isset($_SESSION['login'])) {
        date_default_timezone_set('Australia/Melbourne');
        function welcome(){
          $time = date('H');
          $timezone = date('e');
           if($time < '12') {
             return "Welcome";
           } elseif($time > '11' && $time < '18') {
             return "Welcome";
           } elseif($time > '17') {
             return "Welcome";
           }
        }
      ?>
        <p class="txt-center my-xs" style="color: white; font-size: 1.25rem;">
          <?php echo welcome() . ', '; ?>
          <?php echo $_SESSION['login']['firstname'] ; ?>
        </p>
      <?php } ?>
        <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
                </div>
    </header>
