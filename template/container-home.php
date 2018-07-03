<?php
$section = [
    'title' => 'Header',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, placeat laboriosam nostrum quo est quas temporibus eos repellat aspernatur iure numquam, nulla facilis natus impedit rem atque enim? A, odio.'
];
?>

  <section class="section home">
    <div class="container">
      <div class="wrapper">
        <?php for($i=0; $i<5; $i++) : ?>
        <div class="post">
          <div class="article">
            <a href="#" class="article__img">
              <img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
            </a>
            <div class="article__category">
              <span>psyche</span>
              <span>ciało</span>
            </div>
            <div class="article__content">
              <h2 class="article__content-header">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </a>
              </h2>
              <div class="article__content-date">
                28 czerwca 2018
              </div>
              <div class="article__content-intro">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam alias expedita saepe nobis consequatur fugit est repellat
                corporis dolorum aliquid, magnam earum cupiditate dolor, quibusdam ut voluptas nulla. Quam, necessitatibus!
              </div>
            </div>
          </div>
        </div>

        <div class="post">
          <div class="article">
            <a href="#" class="article__img">
              <img src="https://picsum.photos/400/30<?= $i+1; ?>" alt="x">
            </a>
            <div class="article__category">
              <span>psyche</span>
              <span>ciało</span>
            </div>
            <div class="article__content">
              <h2 class="article__content-header">
                <a href="#">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </a>
              </h2>
              <div class="article__content-date">
                post nr
                <?= $i; ?>
              </div>
              <div class="article__content-intro">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              </div>
            </div>
          </div>
        </div>

        <?php endfor; ?>
      </div>


      <?php include_once('aside.php')?>
    </div>
  </section>