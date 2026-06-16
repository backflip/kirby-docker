<?php

use Kirby\Cms\App;

require 'kirby/bootstrap.php';

$kirby = new App([
    'roots' => [
        'content'  => __DIR__ . '/data/content',
        'accounts' => __DIR__ . '/data/accounts',
        'cache'    => __DIR__ . '/data/cache',
        'sessions' => __DIR__ . '/data/sessions',
    ]
]);

echo $kirby->render();
