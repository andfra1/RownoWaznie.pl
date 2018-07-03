<?php
$post = [
    'title' => 'Nagłówek',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, placeat laboriosam nostrum quo est quas temporibus eos repellat aspernatur iure numquam, nulla facilis natus impedit rem atque enim? A, odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto non, fuga assumenda ducimus mollitia omnis, eum officiis sint beatae vel deleniti dolore neque dolorum. Adipisci in temporibus nulla sit quibusdam!'
];
?>

  <section class="section post">
    <div class="container">
      <div class="wrapper">
        <h1>
          <?= $post['title']; ?>
        </h1>
        <div class="post__info">
          <div class="post__info-date">
          28 czerwca 2018
          </div>
          <div class="post__info-share">
            Podziel się: <span class="icon-facebook2"></span>
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
          <strong>pogrubienie</strong><br>
          <u>podkreślenie</u><br>
          <i>kursywa</i>
        </p>
        <p>
          <img src="https://picsum.photos/200/300" alt="mały obrazek">
</p>
<p>
          <img src="https://picsum.photos/1000/500" alt="duży obrazek">
        </p>
      </div>


      <?php include_once('aside.php')?>
    </div>
  </section>