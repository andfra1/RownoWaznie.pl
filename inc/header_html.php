<?php include_once('inc/header.php'); ?>

<div class="offCanvas" id="offCanvas"></div>
<header class="header" id="header">
  <div class="container border-bottom">
    <div class="row">
      <div class="col-lg-12">

        <ul class="header__menuOnTop" id="menuOnTop">
          <?php foreach ( $header['menuOnTop'] as $key => $val) : ?>
          <li class="header__menuOnTop-item">
            <a href="<?= $val; ?>" class="header__menuOnTop-item-link">
              <?= $key; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

        <div class="header__logo">
          <a class="header__logo-link" href="<?= HTTP; ?>">
            <?= $header['logo']; ?>
          </a>
        </div>

        <button class="burger" id="burger" value="off">
          <div class="burger__stripe"></div>
        </button>

        <ul class="header__menu" id="menu">
          <?php foreach ( $header['menu'] as $key => $val) : ?>
          <li class="header__menu-item">
            <a href="<?= $val; ?>" class="header__menu-item-link">
              <?= $key; ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </div>
  </div>
</header>
<div class="underHeader" id="underHeader"></div>
<div class="canvas" id="canvas">