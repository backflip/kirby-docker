<?php

return [
    // Kirby is unable to derive the URL when using nginx, port is incorrect, e.g.
    // So we pass it as global variable instead
    'url' => $_SERVER['APP_URL'] ?? getenv('APP_URL'),
    // Enable debug mode for admin users
    'ready' => function ($kirby) {
        return [
            'debug' => kirby()->user() && kirby()->user()->role()->isAdmin()
        ];
    }
];
