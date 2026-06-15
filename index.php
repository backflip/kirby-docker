<?php

require 'kirby/bootstrap.php';

echo (new Kirby([
    'roots' => [
        'content'  => __DIR__ . '/data/content',
        'accounts' => __DIR__ . '/data/accounts',
    ]
]))->render();
