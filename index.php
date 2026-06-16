<?php

require 'kirby/bootstrap.php';

$kirby = new Kirby([
    'roots' => [
        'content'  => __DIR__ . '/data/content',
        'accounts' => __DIR__ . '/data/accounts',
        'cache'    => __DIR__ . '/data/cache',
        'sessions' => __DIR__ . '/data/sessions',
    ]
]);

echo $kirby->render();
