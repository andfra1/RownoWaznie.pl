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
                  <a href="#" class="article__content-header__link">
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
                  <a href="#" class="article__content-header__link">
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

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8">
          <section class="post">
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
            <figure>
            <img src="https://picsum.photos/1000/500" alt="duży obrazek">
              <figcaption>
podpis pod obrazkiem
              </figcaption>
            </figure>

          </section>
          <section class="associated border-top">
            <div class="row">
              <div class="col-lg-12">
                <h2>
                  Podobne artykuły
                </h2>
              </div>

              <?php for($i=0; $i<3; $i++) : ?>

              <div class="post col-xs-12 col-sm-4">
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
                      <a href="#" class="article__content-header__link">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
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
          </section>

          <section class="prevNextArticle border-top">
            <div class="row">

              <div class="post col-xs-6">
                <h3>Poprzedni artykuł</h3>
                <a href="#" class="article">
                  <div class="article__img">
                    <img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
                  </div>
                  <div class="article__content">
                    <h2 class="article__content-header">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h2>
                  </div>
                </a>
              </div>

              <div class="post col-xs-6">
              <h3>Następny artykuł</h3>
                <a href="#" class="article">
                  <div class="article__img">
                    <img src="https://picsum.photos/400/30<?= $i; ?>" alt="x">
                  </div>
                  <div class="article__content">
                    <h2 class="article__content-header">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h2>
                  </div>
                </a>
              </div>

            </div>
          </section>

        </div>

        <?php include_once('aside.php')?>

      </div>

    </div>
    </div>
  </section>