<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove &bull; <?php if(isset($pageTitle) && !empty($pageTitle)) { echo $pageTitle; } ?></title>
</head>
<body>
<header class="header-with-background" style="background-image: url('<?php if (empty($headerImg) || !isset($headerImg)) echo 'images/pexels-rachel-claire-4577740.jpg'; else echo $headerImg; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a href="our-mission.php" class="<?php if (!empty($pageKey) && $pageKey === 'mission') echo 'active'; ?>">Our mission</a>
      <a href="ingredients.php" class="<?php if(!empty($pageKey) && $pageKey === 'ingredients') echo 'active'; ?>">Ingredients</a>
      <a href="menu.php" class="<?php if(!empty($pageKey) && $pageKey === 'menu') echo 'active'; ?>">Menu</a>
      <a href="aboutUs.php" class="<?php if(!empty($pageKey) && $pageKey === 'aboutUs') echo 'active'; ?>">About Us</a>
    </nav>
  </header>

  <main>