<?php

  bindMinifyHTML();

  function bindMinifyHTML() {

    if ((substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.') || ($_SERVER['REMOTE_ADDR'] == '::1'))
      return;

    if (is_admin() || (!is_front_page() && !is_home() && !is_archive() && !is_single()))
      return;

    add_action('template_redirect', 'startContent');
    add_action('shutdown',          'endContent', 0);

  }

  function startContent() {

    ob_start();

  }

  function endContent() {

    $content = ob_get_contents();
    ob_end_clean();

    $content = preg_replace('/(\r\n)+|\r+|\n+|\t+/i', ' ', $content);
    $content = preg_replace('/>\s+</', '><', $content);
    $content = preg_replace('/\s+/', ' ', $content);

    echo $content;

  }