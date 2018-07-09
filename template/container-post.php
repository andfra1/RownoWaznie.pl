<?php
$post = [
    'title' => 'Nagłówek',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, placeat laboriosam nostrum quo est quas temporibus eos repellat aspernatur iure numquam, nulla facilis natus impedit rem atque enim? A, odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto non, fuga assumenda ducimus mollitia omnis, eum officiis sint beatae vel deleniti dolore neque dolorum. Adipisci in temporibus nulla sit quibusdam!'
];
?>

  <section class="section slider">
    <div class="container">
      <div class="row">
    <div class="slider-articles owl-carousel" id="slider-articles">
      <?php for($i=0; $i<5; $i++) : ?>

      <div class="post">
        <div class="article">
          <a href="#" class="article__img">
            <img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
          </a>
          <div class="article__content">
            <h2 class="article__content-header">
              <a href="#">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </a>
            </h2>
            <time class="article__content-date">
              28 czerwca 2018
            </time>
          </div>
        </div>

</div>
<div class="post">

        <div class="article">
          <a href="#" class="article__img">
            <img src="https://picsum.photos/400/40<?= $i; ?>" alt="x">
          </a>
          <div class="article__content">
            <h2 class="article__content-header">
              <a href="#">
                Lorem ipsum dolor sit
              </a>
            </h2>
            <time class="article__content-date">
              28 czerwca 2018
            </time>
          </div>
        </div>
      </div>

      <?php endfor; ?>
    </div>
    </div>
    </div>
  </section>

  <section class="section post">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
          <h1>
            <?= $post['title']; ?>
          </h1>
          <div class="post__info">
            <div class="post__info-date">
              28 czerwca 2018
            </div>
            <div class="post__info-share">
              Podziel się:
              <span class="icon-facebook2"></span>
            </div>
          </div>
          <p>
            <?= $post['text']; ?>
          </p>
          <p>
            <?= $post['text']; ?>
          </p>
          <p>
            <ul>
              <li>element listy 1</li>
              <li>element listy 2</li>
              <li>element listy 3</li>
              <li>element listy 4</li>
              <li>element listy 5</li>
            </ul>
          </p>
          <p>
            <strong>pogrubienie</strong>
            <br>
            <u>podkreślenie</u>
            <br>
            <i>kursywa</i>
          </p>
          <p>
            <img src="https://picsum.photos/200/300" alt="mały obrazek">
          </p>
          <p>
            <img src="https://picsum.photos/1000/500" alt="duży obrazek">
          </p>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
          <?php include_once('aside.php')?>
        </div>
      </div>
    </div>
  </section>