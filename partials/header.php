<?php 
$styles = json_decode(file_get_contents("colors.json"), true);
$color = $styles["color"];

$path = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
$url = "http://$_SERVER[HTTP_HOST]$path";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/92b62ee1cc.js" crossorigin="anonymous"></script>


  <!-- Bootstrap -->
  <?php if($color != "dark"): ?>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css"
    />
  <?php else:?>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css"
    integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
  <?php endif?>

  <script
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>

  <!-- Static Content -->
  <link rel="stylesheet" href="./static/css/index.css" />
  <?php $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?>
  <?php if ($uri == "/contacts_app_dark/" || $uri == "/contacts_app_dark/index.php"): ?>
    <script defer src="./static/js/welcome.js"></script>
  <?php endif ?>

  
  <title>Contacts App</title>
</head>
<body>
  <?php require "navbar.php" ?>

  
  <?php if (isset($_SESSION["flash"])): ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
    </svg>

    <div class="container mt-4">
      <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div class="ml-2">
          <?= $_SESSION["flash"]["message"] ?>
        </div>
      </div>
    </div>
    <?php unset($_SESSION["flash"]) ?>
  <?php endif ?>


  <main >
    <!-- Content Here -->