<?php
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
   ? "./"
   : $_SERVER["SERVER_NAME"] . "/"
);

//change dev to 0 if you're finished project!
$dev = 1;
$prod = '.min';

//dev functions
function dd($val) {
  die(var_dump($val));
}