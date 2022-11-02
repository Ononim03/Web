<?php

use Classes\MVC\Router;
use Classes\MVC\UserController;

Router::get('/users', UserController::class, 'usersPage');
Router::get('/photos', UserController::class, 'usersPhotoPage');