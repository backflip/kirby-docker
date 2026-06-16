<?php

// Kirby is unable to derive the URL when using nginx, port is incorrect, e.g.
// So we pass it as global variable instead
return [
    'url' => $_SERVER["APP_URL"]
];
