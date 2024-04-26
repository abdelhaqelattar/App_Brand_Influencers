<?php

use App\Core\Router;
use App\Controllers\ChatController;
use App\Middlewares\AuthenticationMiddleware;


Router::get('/api/chat/{id}', function (...$args) {
    ChatController::refresh_conversation($args[0]);
}, AuthenticationMiddleware::class);

