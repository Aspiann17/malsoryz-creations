<?php include "RootRes/php/scandir.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Directory listing</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="RootRes/css/style.css" type="text/css" media="all" />
</head>
<body class="enable-theme">
  <nav class="navbar etr-shadow cusborder-no-hover">
    <h1>ETERNITY</h1>
    <input type="checkbox" id="theme-checkbox"/>
    <label for="theme-checkbox" id="theme-label">
      <i class="fa-solid fa-circle-half-stroke"></i>
    </label>
  </nav>
  <section class="indexlist">
    <?php foreach ($items as $item):?>
      <?php $icon = ( $item[1] ) ? "fa-folder" : "fa-file"?>
        <a href="<?=$item[0]?>" class="item">
          <div class="item-container etr-shadow etr-corner cusborder">
            <h3>
              <span class="files-label"><?=$item[0]?></span>
              <i class="flrght fa-regular <?=$icon?>"></i>
            </h3>
          </div>
        </a>
    <?php endforeach?>
  </section>
</body>
</html>